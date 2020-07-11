<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class HomeController extends Controller
{
    public function __invoke(){

        $t = Tarefa::find(8);
        $t->resolvido = 1;
        $t->save();
        echo "Salvo com sucesso";

      /*   $t = new Tarefa;
        $t->titulo = 'Testando pelo Eloquent';
        $t->save();
        echo "Salvo com sucesso"; */

        //return view('welcome');
    }

}
