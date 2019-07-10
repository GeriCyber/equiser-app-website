<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use OpenGraph;
use SEOMeta;
use Twitter;

class AboutController extends Controller
{
    /**
     * Show the about info.
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
                
    	SEOMeta::setTitle('Equiser | '.__('msg.menu-about'));
        SEOMeta::setDescription(__('msg.about-description'));
        SEOMeta::setKeywords([__('msg.keyword1'), __('msg.keyword2'), __('msg.keyword3'), __('msg.keyword4'), __('msg.keyword5')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.about-description'));
        OpenGraph::setTitle('Equiser | '.__('msg.menu-about'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Equiser | '.__('msg.menu-about'));
        Twitter::setSite('@gruasequiser');

        return view('about');
    }
}
