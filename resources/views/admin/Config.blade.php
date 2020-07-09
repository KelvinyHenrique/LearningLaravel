<h1>CONFIGURAÇÕES</h1>

Meu nome é {{ $name }} meu email é {{$email}}

Versão:{{$versao}}

<form method="post">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name"/>
    <label for="email">Email</label>
    <input type="text" name="email"/>
    <input type="submit" value="Enviar">
</form>

<a href="config/info">Informações</a>
