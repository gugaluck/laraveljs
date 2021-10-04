<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    //O nome da tabela no banco
    protected $table = "transportadoras";

    //Os campos da tabela
    protected $fillable = array("IDTransportadora","NomeConpanhia","Telefone");
    
    //Não utilizar as colunas de tempo do Laravel
    public $timestamps = false;
    
    //Define a chave primária para busca
    protected $primaryKey = 'IDTransportadora';

    public function getTransportadoras() {
        return self::all();
    }

    //Pega uma transportadora em específico
    public function getTransportadora($id) {
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        return $transportadora;
    }

    public function addTransportadora($request) {
        $transportadora = new Transportadora($request);
        
        //Verificação se já existe
        try {
            $transportadora->save();
            return $transportadora;
        } catch (\Exception $e) {
            return false;
        }
        
    } 

    public function alteraTransportadora($req,$id) {
        //Os dados passados pela request
        $dados = $req->all();
        //Vê se a transportadora existe. Os dados vão ser sobrepostos, não serve para mais nada
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        //Preenche com os dados passados
        $transportadora->fill($dados);
        //Salva no banco
        $transportadora->save();
        //Retorna o novo
        return $transportadora;
    }

    public function deletaTransportadora($id) {
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        return $transportadora->delete();
        
    }
}
