@extends("layout")

@section('titulo')
Alteração do Atleta: {{$atleta->nome}}
@stop

@section('conteudo')
<form onsubmit="updateAtleta()" method="POST" action="/api/atleta/atleta_update/{{$atleta->id}}">
        @csrf 
        <label for="nome">Nome:</label>
        <input value="{{$atleta->nome}}" type="text" name="nome" id="nome">
        <br>

        <label for="peso">Peso:</label>
        <input value="{{$atleta->peso}}" type="text" name="peso" id="peso">
        <br>

        <label for="altura">Altura:</label>
        <input value="{{$atleta->altura}}" type="text" name="altura" id="altura">
        <br>

        <label for="id_time">Time:</label>
        <input value="{{$atleta->id_time}}" type="text" name="id_time" id="id_time">
        <br>
        <input data-codigo="{{$atleta->id}}" id="update" type="submit" value="Enviar">
    </form>
@stop

<script>
function updateAtleta() {
    debugger;
    oBotao = document.getElementById('update');
    var id = parseInt(oBotao.getAttribute('data-codigo'));

    $.ajax({
        url: '/api/atleta/atleta_update/'+id,
        type: 'put',
        success: function(result) {
            alert('Atleta alterado com sucesso!');
        }
    });
}
</script>
