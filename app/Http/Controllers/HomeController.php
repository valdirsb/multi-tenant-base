<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;



class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function painel()
    {
        return view('painel');
    }
}
