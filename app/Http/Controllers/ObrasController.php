<?php

namespace App\Http\Controllers;

use App\Obra;
use App\Equipo;
use SEOMeta;
use OpenGraph;
use Twitter;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObrasController extends Controller
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

        SEOMeta::setTitle('Equiser | '.__('msg.menu-projects'));
        SEOMeta::setDescription(__('msg.general-description'));
        SEOMeta::setKeywords([__('msg.keyword6'), __('msg.keyword7'), __('msg.keyword8'), __('msg.keyword9'), __('msg.keyword10')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.general-description'));
        OpenGraph::setTitle('Equiser | '.__('msg.menu-projects'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Equiser | '.__('msg.menu-projects'));
        Twitter::setSite('@gruasequiser');

        $country = Session::get('country');
    	$obras = Obra::where($country, true)->paginate(6);
        return view('obras.index')->with(compact('obras'));
    }

    public function show(Request $request, $slug)
    {
        if ($request->session()->get('country') == NULL) {
            $request->session()->put('country', 'venezuela');
        }

    	$obra = Obra::where('slug', $slug)->firstOrFail();
        $images = $obra->images->all();

        if (App::getLocale() == 'es') {
            SEOMeta::setTitle('Equiser | '.$obra->name);
            SEOMeta::setDescription(str_limit($obra->description, 100));
        } else {
            SEOMeta::setTitle('Equiser | '.$obra->name_en);
            SEOMeta::setDescription(str_limit($obra->description_en, 100));
        }
        
        SEOMeta::setKeywords(['Grúas', 'Maquinaria de Izamiento', 'Montacargas', 'Transporte Terrestre', 'Cranes']);
        OpenGraph::addProperty('locale', App::getLocale());

        if (App::getLocale() == 'es') {
            OpenGraph::setDescription(str_limit($obra->description, 100));
            OpenGraph::setTitle('Equiser | '.$obra->name);
        } else {
            OpenGraph::setDescription(str_limit($obra->description_en, 100));
            OpenGraph::setTitle('Equiser | '.$obra->name_en);
        }
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        if (App::getLocale() == 'es') {
            Twitter::setTitle('Equiser | '.$obra->name);
        } else {
            Twitter::setTitle('Equiser | '.$obra->name_en);
        }
        Twitter::setSite('@gruasequiser');

        OpenGraph::addImage($obra->featured_image_url);
        OpenGraph::addImage(['url' => asset($obra->featured_image_url), 'size' => 300]);
        OpenGraph::addImage(asset($obra->featured_image_url), ['height' => 300, 'width' => 300]);

        $relatedObras = Obra::where($request->session()->get('country'), true)->inRandomOrder()->take(3)->get();

        return view('obras.show')->with(compact('obra', 'images', 'relatedObras'));
    }
}
