<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    protected $fillable = array('primeiro_nome','cidade','estado','password');
    protected $hidden = ['password'];

    public function todasPessoas() {
        return self::all();
    }

    public function salvarPessoa() {
        $input = Input::all();
        //dd($input);
        $pessoa = new Pessoa($input); // mass assigment
        $pessoa->password = Hash::make($pessoa->password);

        $pessoa->save();
        return $pessoa;
        // $primeiro_nome = $input['primeiro_nome'];
        // $segundo_nome = $input['segundo_nome'];
    }

    public function getPessoa($id) {
        $pessoa = self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        return $pessoa;
    }

    public function deletarPessoa($id) {
        $pessoa = self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        return $pessoa->delete();
    }

    public function atualizarPessoa($id) {
        $pessoa = self::find($id);
        if (is_null($pessoa)) {
            return false;
        }
        $input = Input::all();
        if (isset($input['password'])) {
            $pessoa->password = Hash::make($input['password']);
        }
        $pessoa->fill($input);
        $pessoa->save();
        return $pessoa;
    }

}
