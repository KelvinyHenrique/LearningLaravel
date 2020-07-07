<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config');
    }

    public function info()
    {
        echo 'configurações info 3';
    }

    public function permissoes()
    {
        echo 'configurações permissoes 3';
    }
}
