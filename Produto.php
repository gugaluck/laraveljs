<?php
//by Gabriel Klug
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Mappable;

class Produto extends Model
{

    protected $table = 'produtos';
    protected $fillable = array('IDProduto','NomeProduto','IDFornecedor','IDCategoria','QuantidadePorUnidade','PrecoUnitario','UnidadesEmEstoque','UnidadesEmOrdem','NivelDeReposicao','Descontinuado');
    protected $primaryKey = 'IDProduto';

    public function todosProdutos() {
        return self::all();
    }
    public $timestamps = false;

    public function salvarProduto() {
        $input = Input::all();
        //dd($input);
        $produto = new Produto($input); // mass assigment
        $produto->save();
        return $produto;
        // $primeiro_nome = $input['primeiro_nome'];
        // $segundo_nome = $input['segundo_nome'];
    }

    public function getProduto($IDProduto) {
        $produto = self::find($IDProduto);
        if (is_null($produto)) {
            return false;
        }
        return $produto;
    }

    public function deletarProduto($IDProduto) {
        $produto = self::find($IDProduto);
        if (is_null($produto)) {
            return false;
        }
        return $produto->delete();
    }

    public function atualizarProduto($IDProduto) {
        $produto = self::find($IDProduto);
        if (is_null($produto)) {
            return false;
        }
        $input = Input::all();
        $produto->fill($input);
        $produto->save();
        return $produto;
    }
}


?>