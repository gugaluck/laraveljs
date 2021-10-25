@extends("layout")

@section('titulo')
    Cadastro de Campeonato
@stop

@section('conteudo')
    <form method="POST" action="/api/campeonato">
        @csrf
        <h1>Cadastro de Campeonato</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <input type="submit" value="Enviar">
    </form>
@stop


