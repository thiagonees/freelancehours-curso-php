<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    //invoke = nenhum método a mais dentro dessa classe
    public function __invoke(Request $request): View|Factory|Application
    {
        return view('welcome');
    }
}
