<?php

namespace App\Http\Controllers;

use SEOMeta;
use OpenGraph;
use Twitter;
use App\Obra;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Torann\GeoIP\Facades\GeoIP;

class WelcomeController extends Controller
{
    public function index()
    {
        $location = geoip('207.191.230.28');
        // request()->ip();
        if ($location->iso_code == 'US') {
            App::setLocale('en');
        } else {
            App::setLocale('es');
        }

        SEOMeta::setTitle(__('msg.welcome-title'));
        SEOMeta::setDescription(__('msg.welcome-description'));
        SEOMeta::setKeywords([__('msg.keyword1'), __('msg.keyword2'), __('msg.keyword3'), __('msg.keyword4'), __('msg.keyword5')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.welcome-description'));
        OpenGraph::setTitle(__('msg.welcome-description'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle(__('msg.welcome-description'));
        Twitter::setSite('@gruasequiser');

        return view('welcome');
    }

    public function saveSessionCountry(Request $request)
    {
    	$request->session()->put('country', $request->country);

    	if ($request->country == 'usa') {
    		Session::put('locale', 'en');
    	} else {
            Session::put('locale', 'es');
        }

        return redirect()->route('home');
    }
}