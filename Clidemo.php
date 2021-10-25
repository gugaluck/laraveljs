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
        
        $dados = $req->all();
        
        $clidemo = Clidemo::find($id);
        if (is_null($clidemo)) {
            return false;
        }
        
        $clidemo->fill($dados);
        
        $clidemo->save();
        
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
