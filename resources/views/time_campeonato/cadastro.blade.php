@extends("layout")

@section('titulo')
    Relacionamento Time x Campeonato
@stop

@section('conteudo')
    <form method="POST" action="/api/timecampeonato">
        @csrf
        <h1>Cadastro de Time x Campeonato</h1>
        <label for="timcodigo">Time:</label>
        <input type="text" name="timcodigo" id="timcodigo">
        <br>

        <label for="camcodigo">Campeonato:</label>
        <input type="text" name="camcodigo" id="camcodigo">
        <br>

        <input type="submit" value="Enviar">
    </form>
@stop


