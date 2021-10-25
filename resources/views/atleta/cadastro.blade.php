@extends("layout")

@section('titulo')
    Cadastro de Atleta 
@stop

@section('conteudo')
    <form method="POST" action="/api/atleta">
        @csrf
        <h1>Cadastro de Atleta</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="peso">Peso:</label>
        <input type="number" name="peso" id="peso">
        <br>

        <label for="altura">Altura:</label>
        <input type="text" name="altura" id="altura">
        <br>

        <label for="id_time">Time:</label>
        <input type="number" name="id_time" id="id_time">
        <br>

        <input type="submit" value="Enviar">
    </form>
@stop


