@extends("layout")

@section('titulo')
Alteração do Campeonato: {{$campeonato->nome}}
@stop

@section('conteudo')
<form onsubmit="updateCampeonato()" method="POST" action="/api/campeonato/campeonato_update/{{$campeonato->id}}">
        @csrf 
        <label for="nome">Nome:</label>
        <input value="{{$campeonato->nome}}" type="text" name="nome" id="nome">
        <br>
        <input data-codigo="{{$campeonato->id}}" id="update" type="submit" value="Enviar">
    </form>
@stop

<script>
function updateCampeonato() {
    debugger;
    oBotao = document.getElementById('update');
    var id = parseInt(oBotao.getAttribute('data-codigo'));

    $.ajax({
        url: '/api/campeonato/campeonato_update/'+id,
        type: 'put',
        success: function(result) {
            alert('Campeonato alterado com sucesso!');
        }
    });
}
</script>
