@extends("layout")

@section('titulo')
    Atletas 
@stop

@section('conteudo')
    <h5>Atletas</h5>
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr style="background-color: darkgray">
            <td><b>Código</b></td>
            <td><b>Nome</b></td>
            <td><b>Peso</b></td>
            <td><b>Altura</b></td>
            <td><b>Time</b></td>
            <td><b>Alterar</b></td>
            <td><b>Remover</b></td>
        </tr>
        @foreach ($atletas as $p)
            <tr style="background-color:#d3d4de">
                <td><a href="atleta/detalhe/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->peso}}</td>
                <td>{{$p->altura}}</td>
                <td>{{$p->time_nome}}</td>
                <td><a href="atleta/formulario_alt/{{$p->id}}"><img alt="Alterar" src="http://localhost/trab_final_laravel/imagens/alterar.png"  width="30" height="30"></a></td>
                <td><a href="/api/atleta" onclick="removeAtleta()" id="delete" data-codigo="{{$p->id}}"><img alt="Remover" src="http://localhost/trab_final_laravel/imagens/remover.png"  width="30" height="30"></a></td>
                
            </tr>
        @endforeach
    </table>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


function removeAtleta() {
    oBotao = document.getElementById('delete');
    var id = parseInt(oBotao.getAttribute('data-codigo'));

    $.ajax({
        url: '/api/atleta/atleta_delete/'+id,
        type: 'DELETE',
        success: function(result) {
            alert('Atleta removido com sucesso!');
        }
    });
}

</script>

