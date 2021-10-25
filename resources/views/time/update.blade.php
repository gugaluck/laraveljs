@extends("layout")

@section('titulo')
Alteração do Time: {{$time->nome}}
@stop

@section('conteudo')
<!-- <form method="POST" action="/api/time/formulario_alt/{{$time->id}}"> -->
<form onsubmit="updateTime()" method="POST" action="/api/time/time_update/{{$time->id}}">
        @csrf 
        <label for="nome">Nome:</label>
        <input value="{{$time->nome}}" type="text" name="nome" id="nome">
        <br>
        <input data-codigo="{{$time->id}}" id="update" type="submit" value="Enviar">
    </form>
@stop

<script>
function updateTime() {
    debugger;
    oBotao = document.getElementById('update');
    var id = parseInt(oBotao.getAttribute('data-codigo'));

    $.ajax({
        url: '/api/time/time_update/'+id,
        type: 'put',
        success: function(result) {
            alert('Time alterado com sucesso!');
        }
    });
}
</script>
