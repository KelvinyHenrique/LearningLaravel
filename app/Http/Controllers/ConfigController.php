<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index(Request $request)
    {

        if ($request->input('cidade') == null) {
            $cidade = $request->input('cidade');
        } else {
            $cidade = 'Hoje não';
        }

        $data = [
            'name' => 'Kelviny',
            'email' => 'kelvinyhenrique17@gmail.com',
            'idade' => '90',
            'cidade' => $cidade,

        ];
        return view('admin.config', $data);
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
