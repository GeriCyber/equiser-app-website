<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use OpenGraph;
use SEOMeta;
use Twitter;

class ContactController extends Controller
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
        
    	SEOMeta::setTitle('Equiser | '.__('msg.menu-contact'));
        SEOMeta::setDescription(__('msg.contact-description'));
        SEOMeta::setKeywords([__('msg.keyword6'), __('msg.keyword7'), __('msg.keyword8'), __('msg.keyword9'), __('msg.keyword10')]);
        OpenGraph::addProperty('locale', App::getLocale());

        OpenGraph::setDescription(__('msg.contact-description'));
        OpenGraph::setTitle('Equiser | '.__('msg.menu-contact'));
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'articles');

        Twitter::setTitle('Equiser | '.__('msg.menu-contact'));
        Twitter::setSite('@gruasequiser');

        return view('contact');
    }

    public function send(Request $request)
    {
        $rules =
        [
            'name' => 'required|min:4|max:190',
            'email' => 'required|email',
            'subject' => 'required|min:4|max:190',
            'message' => 'required|min:4|max:900'
        ];
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return back()->with('errors', $error->errors()->all());
        }

        Mail::send('mail.contact',
        array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'message_form' => $request->get('message'),
           'location' => ucfirst(Session::get('country')),
        ), function($message) {
           $message->from('equisergruas@gmail.com');
           $message->to('gericyber@gmail.com', 'Equiser')
           ->subject('Nuevo mensaje desde equiser.net');
        });

        if (App::getLocale() == 'es') {
            return back()->with('success', 'Mensaje Enviado');
        } else {
            return back()->with('success', 'Message Sent');
        }
    }
}
