<?php
/**
 * @author Ivan Vinicius Boneti
 * @package laravel_api
 * @subpackage model 
 */


namespace App\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';
    protected $fillable = array(
                                "IDFuncionario",       "Sobrenome",       "Nome",
                                "Titulo",              "TituloCortesia",  "DataNac",
                                "DataAdmissao",        "Endereco",        "Cidade",
                                "Regiao",              "Cep",             "Pais",
                                "TelefoneResidencial", "Extensao",        "Reportase"
                               );

    protected $hidden = ['Foto', 'FotoCaminho', 'Notas'];

    //header('Content-type: image/bmp');

    protected $primaryKey = "IDFuncionario";
    public $timestamps = false;

    public function todosFuncionario()
    {
        return self::all();
    }

    public function getFuncionario($id)
    {
        $funcionario= self::find($id);
        if (is_null($funcionario)) {
            return false;
        }
        return $funcionario;
    }

    public function addFuncionario()
    {
        $input = Input::all();
        $funcionario = new Funcionario($input);
        $funcionario->save();
        return $funcionario;
    }

    public function atualizarFuncionario($id)
    {
        $funcionario = self::find($id);
        if (is_null($funcionario)) {
            return false;
        }
        $input = Input::all();
        $funcionario->fill($input);
        $funcionario->save();
        return self::find($id);
    }

    public function deletarFuncionario($id)
    {
        $funcionario = self::find($id);
        if (is_null($funcionario)) {
            return false;
        }
        return $funcionario->delete(); 
    }


}