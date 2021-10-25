<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    protected $table = 'regiao';
    protected $fillable = array("IDRegiao","DescricaoRegiao");
    protected $primaryKey = "IDRegiao";
    public $timestamp = false;

    public function todasRegioes()
    {
        return self::all();
    }

    public function getRegiao($id)
    {
        $regiao= self::find($id);
        if (is_null($regiao)) {
            return false;
        }
        return $regiao;
    }

    public function addRegiao()
    {
        $input = Input::all();
        $regiao = new Regiao($input);
        $regiao->save();
        return $regiao;
    }

    public function atualizarRegiao($id)
    {
        $regiao = self::find($id);
        if (is_null($regiao)) {
            return false;
        }
        $input = Input::all();
        $regiao->fill($input);
        $regiao->save();
        return $regiao;
    }

    public function deletarRegiao($id)
    {
        $regiao = self::find($id);
        if (is_null($regiao)) {
            return false;
        }
        return $regiao->delete(); 
    }
}
