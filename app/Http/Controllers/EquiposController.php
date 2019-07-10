<?php

namespace App\Http\Controllers;

use App\Equipo;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Obra;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EquiposController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->get('country') == NULL) {
            $location = geoip('207.191.230.28');
            // request()->ip();
            switch ($location->iso_code) {
                case 'VE':
                    $request->session()->put('country', 'venezuela');
                    break;
                case 'US':
                    $request->session()->put('country', 'usa');
                    break;
                case 'CO':
                    $request->session()->put('country', 'colombia');
                    break;
                case 'PA':
                    $request->session()->put('country', 'panama');
                    break;
                default:
                    $request->session()->put('country', 'venezuela');
            }
        }

        SEOMeta::setTitle('Equiser | '.__('msg.menu-equipments'));
        SEOMeta::setDescription(__('msg.general-description'));
        SEOMeta::setKeywords([__('msg.keyword6'), __('msg.keyword7'), __('msg.keyword8'), __('msg.keyword9'), __('msg.keyword10')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.general-description'));
        SEOMeta::setTitle('Equiser | '.__('msg.menu-equipments'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        SEOMeta::setTitle('Equiser | '.__('msg.menu-equipments'));
        Twitter::setSite('@gruasequiser');

        $country = Session::get('country');
        $equipos = Equipo::where($country, true)->paginate(6);
        return view('equipos.index')->with(compact('equipos'));
    }

    public function show(Request $request, $slug)
    {
        if ($request->session()->get('country') == NULL) {
            $request->session()->put('country', 'venezuela');
        }

    	$equipo = Equipo::where('slug', $slug)->firstOrFail();
        $images = $equipo->images->all();

        if (App::getLocale() == 'es') {
            SEOMeta::setTitle('Equiser | '.$equipo->name);
            SEOMeta::setDescription(str_limit($equipo->description, 100));
        } else {
            SEOMeta::setTitle('Equiser | '.$equipo->name_en);
            SEOMeta::setDescription(str_limit($equipo->description_en, 100));
        }
        SEOMeta::setKeywords(['Grúas', 'Maquinaria de Izamiento', 'Montacargas', 'Transporte Terrestre', 'Cranes']);
        OpenGraph::addProperty('locale', App::getLocale());

        if (App::getLocale() == 'es') {
            OpenGraph::setDescription(str_limit($equipo->description, 100));
            OpenGraph::setTitle('Equiser | '.$equipo->name);
        } else {
            OpenGraph::setDescription(str_limit($equipo->description_en, 100));
            OpenGraph::setTitle('Equiser | '.$equipo->name_en);
        }
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        if (App::getLocale() == 'es') {
            Twitter::setTitle('Equiser | '.$equipo->name);
        } else {
            Twitter::setTitle('Equiser | '.$equipo->name_en);
        }
        Twitter::setSite('@gruasequiser');

        OpenGraph::addImage($equipo->featured_image_url);
        OpenGraph::addImage(['url' => asset($equipo->featured_image_url), 'size' => 300]);
        OpenGraph::addImage(asset($equipo->featured_image_url), ['height' => 300, 'width' => 300]);

        $relatedEquipos = Equipo::where($request->session()->get('country'), true)->inRandomOrder()->take(3)->get();

        return view('equipos.show')->with(compact('equipo', 'images', 'relatedEquipos'));
    }
}
