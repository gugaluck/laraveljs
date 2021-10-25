@extends("layout")

@section('titulo')
    Cadastro de Time
@stop

@section('conteudo')
    <form method="POST" action="/api/time">
        @csrf
        <h1>Cadastro de Time</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <input type="submit" value="Enviar">
    </form>
@stop


