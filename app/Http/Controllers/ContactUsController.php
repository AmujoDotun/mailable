<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create(){
       return view('pages.contact-us');
    }

    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // dd(request()->all());

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect('contact-us');
    }
}
