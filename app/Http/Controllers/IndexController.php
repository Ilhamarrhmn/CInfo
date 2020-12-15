<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function artikel1()
    {
        return view('artikel.artikel-covid');
    }

    public function artikel2()
    {
        return view('artikel.artikel-kesehatan');
    }

    public function artikel3()
    {
        return view('artikel.artikel-newnormal');
    }
}
