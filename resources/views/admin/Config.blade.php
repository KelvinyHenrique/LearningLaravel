
@extends('layouts.admin')
@section('title', 'Configurações')

@section('content')

    <h1>CONFIGURAÇÕES</h1>
{{--
Meu nome é {{ $name }} meu email é {{$email}} é minha idade é {{$idade}}<br/>
    @if($idade > 18)
        Eu sou maoior de idade<br/><br/>
    @else
        eu não sou maior de idade<br/><br/>
    @endif


    @isset($versao)
        Existe uma versão é e a {{$versao}}<br/><br/>
    @endisset

    @empty($cidade)
        Não existe uma cidade<br/>
    @endempty

    <hr/>
    @for($q=1;$q<=10;$q++)
        O valor de $q é: {{$q}}<br/>
        <hr/>
    @endfor
 --}}

    Lista do bolo:

    @if(empty($lista) == false)
                @foreach($lista as $item)
                    <li>{{$item}}</li>
                @endforeach
    @endif
    <ul>


    </ul>


    <form method="post">
        @csrf
        <label for="name">Nome</label><br/><br/>
        <input type="text" name="name"/><br/><br/>
        <label for="email">Email</label><br/><br/>
        <input type="text" name="email"/><br/><br/>
        <label for="cidade">Cidade</label><br/><br/>
        <input type="text" name="cidade"/><br/><br/><br/>
        <input type="submit" value="Enviar">
    </form>

    <a href="config/info">Informações</a>
@endsection
