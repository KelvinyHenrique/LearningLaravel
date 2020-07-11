@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
    <h1>Adição de Tarefas</h1>

    @if($errors->any())
    <x-alert>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    </x-alert>

    @endif

    <form method="post">
        @csrf
        <label for="name">Titulo:
            <input type="text" name="title"/>
        </label>

        <input type="submit" value="Adicionar"/>

    </form>
@endsection
