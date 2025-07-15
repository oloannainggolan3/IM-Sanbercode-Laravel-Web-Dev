<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formdaftar() {
        return view('page.register');
    }   
    public function formwelcome(request $request) {
        $fullname = $request->input('first_name') . ' ' . $request->input('last_name');
        return view('page.welcome', ['fullname' => $fullname]); 
    }
}
