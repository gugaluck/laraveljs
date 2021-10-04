<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $table = 'ordens_detalhes';
    protected $fillable = array("IDOrdem","IDProduto","PrecoUnitario","Quantidade","Desconto");
    protected $primaryKey = 'IDOrdem';
    public $timestamp = false;

    public function todasOrdens()
    {
        return self::all();
    }

    public function getOrdem($id)
    {
        $ordem = Self::find($id);
        if (is_null($ordem)) {
            return false;
        }   
        return $ordem;
    }

    public function addOrdem()
    {
        $input = Input::all();

        $ordem = new Ordem($input);
        $ordem->save();
        return $ordem;
    }

    public function atualizarOrdem($id)
    {
        $ordem = self::find($id);
        if (is_null($ordem)) {
            return false;
        }
        $input = Input::all();
        $ordem->fill($input);
        $ordem->save();
        return $ordem;
    }

    public function deletarOrdem($id)
    {
        $ordem = self::find($id);
        if (is_null($ordem)) {
            return false;
        }
        return $ordem->delete(); 
    }
}
