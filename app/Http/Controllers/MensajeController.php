<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeController extends Controller
{
    public function store()
    {
        $msj = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => __('I need your name')
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new Email($msj));

        return redirect('/');
    }
}
