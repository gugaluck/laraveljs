@extends("layout")

@section('titulo')
    Times 
@stop

@section('conteudo')
    <h5>Times</h5>
    <hr>
    <p class="alert alert-info">{{ Session::get('message') }}</p>

    <table class="table">

    </table>

    <script>

        function removeTime() {
            oBotao = document.getElementById('delete');
            var id = parseInt(oBotao.getAttribute('data-codigo'));

            $.ajax({
                url: '/api/time/time_delete/'+id,
                type: 'DELETE',
                success: function(result) {
                    alert('Time removido com sucesso!');
                }
                
                
            });

            return false;
        }

        function carregarTimes() {
            oTable = document.querySelector('.table');
            aCabecalho = ['Código', 'Nome', 'Alterar', 'Remover'];
            const oTr = document.createElement('tr');
            oTr.style.backgroundColor  = 'darkgray';

            aCabecalho.forEach(element => {
                oColuna = document.createElement('td');
                oColuna.style.fontWeight ='bold';
                oColuna.innerHTML = element;

                oTr.appendChild(oColuna);

                oTable.appendChild(oTr);
            });

            $.ajax({
                url: '/api/time',
                type: 'GET',
                success: function(result) {
                    if(result) {

                        result.forEach(element => {
                            console.log(element.nome);
                            const oTr = document.createElement('tr');
                            oTr.style.backgroundColor  = '#d3d4de';

                            oCodigo = document.createElement('td');
                            oCodigo.innerHTML = element.id;

                            oTr.appendChild(oCodigo);

                            oNome = document.createElement('td');
                            oNome.innerHTML = element.nome;

                            oTr.appendChild(oNome);

                            oAltera = document.createElement('td');
                            oImgAlt = document.createElement('img');
                            oImgAlt.setAttribute('alt', 'Alterar');
                            oImgAlt.setAttribute('src', 'http://localhost/trab_final_laravel/imagens/alterar.png');
                            oImgAlt.setAttribute('width', '30px');
                            oImgAlt.setAttribute('height', '30px');
                            oImgAlt.setAttribute('onclick', 'teste()')
                 

                            oAltera.appendChild(oImgAlt);

                            oTr.appendChild(oAltera);

                

                            

                            oTable.appendChild(oTr);
                        });
                      
                    };
                }
            });
        }

        function teste() {
            alert('oio');
        }

        function deletaTime(id) {
            //delete
            //ajax

            carregarTimes();
        }

        $(function() {
            carregarTimes();
        });
        
    </script>

@stop