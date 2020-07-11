@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
    <h1>Edição de Tarefas</h1>

    @if(session('warning'))
        <x-alert>
            {{session('warning')}}
        </x-alert>
    @endif

    <form method="post">
        @csrf
        <label for="name">Titulo:
        <input type="text" name="title" value="{{$data->titulo}}"/>
        </label>

        <input type="submit" value="Salvar"/>

    </form>
@endsection
