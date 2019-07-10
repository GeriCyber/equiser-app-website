<?php

namespace App\Http\Controllers;

use SEOMeta;
use OpenGraph;
use Twitter;
use App\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
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

    	SEOMeta::setTitle('Equiser '.ucfirst($request->session()->get('country')));
        SEOMeta::setDescription('Alquiler de Gruas, Grúas en panama, Grúas en Venezuela, Grúas en Colombia, Grúas Estados Unidos, Grúas telescópica, Alquiler de equipos,Transporte especial,Transporte terrestre, Crane Services.');
        SEOMeta::setKeywords(['Alquiler de Gruas', 'Grúas en panama', 'Grúas en Venezuela', 'Grúas en Colombia', 'Grúas en Estados Unidos', 'Grúas telescópicas']);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription('Alquiler de Gruas, Grúas en panama, Grúas en Venezuela, Grúas en Colombia, Grúas Estados Unidos, Grúas telescópica, Alquiler de equipos,Transporte especial,Transporte terrestre, Crane Services.');
        OpenGraph::setTitle('Equiser '.$request->session()->get('country'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Equiser '.$request->session()->get('country'));
        Twitter::setSite('@gruasequiser');

    	$obras = Obra::where($request->session()->get('country'), true)->inRandomOrder()->take(4)->get();

        return view('home')->with(compact('obras'));
    }
}
