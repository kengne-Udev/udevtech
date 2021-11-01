<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create() {

        return view('contact.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|max:250',
            'message' => 'required'
        ]);

        Mail::to('kengnemaster@test.com')->send(new contactMail($data));
        return view('contact.create');
    }
}
