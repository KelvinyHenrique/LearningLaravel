@extends('layouts.admin')

@section('title', 'Tarefas')

@section('content')
    <h1>Listagem de Tarefas</h1>
<a href="{{route('tarefas.add')}}">Adicionar nova Tarefa</a>
        @if(count($list) > 0)
        <ul>
        @foreach ($list as $item)
            <li>
            <a href="{{route('tarefas.done', ['id'=>$item->id])}}" >[@if($item->resolvido===1) Desmarcar @else Marcar @endif]</a>
                <a href="{{route('tarefas.edit', ['id'=>$item->id])}}">[ Editar ]</a>
                <a href="{{route('tarefas.del', ['id'=>$item->id])}}" onclick="return confirm('Tem certeza que desaja excluir?')">[ Excluir ]</a>
                {{$item->titulo}}
            </li>
        @endforeach
        </ul>
    @else
        Não há items a serem listados.
    @endif
@endsection
