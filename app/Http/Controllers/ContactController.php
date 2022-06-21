<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ajouterContact()
    {
        return view('contact.ajouter-contact');
    }
}