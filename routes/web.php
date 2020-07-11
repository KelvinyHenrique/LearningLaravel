<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController');
Route::get('/login', function(){
    echo 'Página de Login';
})->name('login');

Route::prefix('/tarefas')->group(function(){
    Route::get('/', 'TarefasController@list')->name('tarefas.list'); //Listagem de Tarefas

    Route::get('add', 'TarefasController@add')->name('tarefas.add'); //Adicionar nova Tarefas
    Route::post('add', 'TarefasController@addAction'); //Ação de adição de nova tarefa

    Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit'); //Tela de edição
    Route::post('edit/{id}', 'TarefasController@editAction');

    Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del'); // Ação de Deletar

    Route::get('marcar/{id}', 'TarefasController@done')->name('tarefas.done');//Marcar Resolvido/não

});

Route::prefix('/config')->group(function(){
    Route::get('/', 'ConfigController@index')->middleware('auth');
    Route::post('/', 'ConfigController@index');
    Route::get('info', 'ConfigController@info');
    Route::get('permissoes', 'ConfigController@permissoes');
});

Route::fallback(function(){
    return view('404');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
