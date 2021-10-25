@extends("layout")

@section('titulo')
    Campeonatos 
@stop

@section('conteudo')
    <h5>Campeonatos</h5>
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr style="background-color: darkgray">
            <td><b>Código</b></td>
            <td><b>Nome</b></td>
            <td><b>Alterar</b></td>
            <td><b>Remover</b></td>
        </tr>
        @foreach ($campeonatos as $p)
            <tr style="background-color:#d3d4de">
                <td><a href="campeonato/detalhe/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td><a href="campeonato/formulario_alt/{{$p->id}}"><img alt="Alterar" src="http://localhost/trab_final_laravel/imagens/alterar.png"  width="30" height="30"></a></td>
                <td><a href="/api/campeonato" onclick="removeCampeonato()" id="delete" data-codigo="{{$p->id}}"><img alt="Remover" src="http://localhost/trab_final_laravel/imagens/remover.png"  width="30" height="30"></a></td>
                
            </tr>
        @endforeach
    </table>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


function removeCampeonato() {
    oBotao = document.getElementById('delete');
    var id = parseInt(oBotao.getAttribute('data-codigo'));

    $.ajax({
        url: '/api/campeonato/campeonato_delete/'+id,
        type: 'DELETE',
        success: function(result) {
            alert('Campeonato removido com sucesso!');
        }
    });
}

</script>

