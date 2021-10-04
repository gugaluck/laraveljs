<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Clidemo extends Model
{
    protected $table = "clientes_demograficos";

    protected $fillable = Array("IDTipoCliente","DescricaoCliente");

    public $timestamps = false;

    protected $primaryKey = 'IDTipoCliente';

    public function getClidemos() {
        return self::all();
    }

    //Pega uma clidemo em específico
    public function getClidemo($id) {
        $clidemo = Clidemo::find($id);
        if (is_null($clidemo)) {
            return false;
        }
        return $clidemo;
    }

    public function addClidemo($request) {
        $clidemo = new Clidemo($request);
        try {
            $clidemo->save();
            return $clidemo;
        } catch (\Exception $e) {
            return false;
        }
        
        
    } 

    public function alteraClidemo($req,$id) {
        //Os dados passados pela request
        $dados = $req->all();
        //Vê se a clidemo existe. Os dados vão ser sobrepostos, não serve para mais nada
        $clidemo = Clidemo::find($id);
        if (is_null($clidemo)) {
            return false;
        }
        //Preenche com os dados passados
        $clidemo->fill($dados);
        //Salva no banco
        $clidemo->save();
        //Retorna o novo
        return $clidemo;
    }

    public function deletaClidemo($id) {
        $clidemo = Clidemo::find($id);
        if (is_null($clidemo)) {
            return false;
        }
        return $clidemo->delete();
        
    }
}
