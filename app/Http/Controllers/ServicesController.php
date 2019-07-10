<?php

namespace App\Http\Controllers;

use SEOMeta;
use OpenGraph;
use Twitter;
use App\Obra;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Show the services info.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

    	SEOMeta::setTitle('Equiser | '.__('msg.menu-services'));
        SEOMeta::setDescription(__('msg.general-description'));
        SEOMeta::setKeywords([__('msg.keyword6'), __('msg.keyword7'), __('msg.keyword8'), __('msg.keyword9'), __('msg.keyword10')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.general-description'));
        OpenGraph::setTitle('Equiser | '.__('msg.menu-services'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Equiser | '.__('msg.menu-services'));
        Twitter::setSite('@gruasequiser');

        return view('services');
    }
}
