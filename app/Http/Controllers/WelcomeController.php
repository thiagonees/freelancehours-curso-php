<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    //invoke = nenhum método a mais dentro dessa classe
    public function __invoke(Request $request) 
    {
        return view('welcome');
    }
}
