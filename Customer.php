<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customercustomerdemo';
    protected $fillable = Array("IDCliente","IDTipoCliente");

    protected $primaryKey = "IDCliente";

    public $timestamps = false;

    public function todosCustomers()
    {
        return self::all();
    }

    public function salvarCustomers($req){
        $input = $req->all();
        $customer = new Customer($input); 
        $customer->save();
        return $customer;

    }
    
    public function getCustomers($id){
        $customer = self::find($id);
        if (is_null($customer)){
            return false;
        }
        return $customer;
    }

    public function deletarCustomers($id){
        $customer = self::find($id);

        if (is_null($customer)){
            return false;
        }
        return $customer->delete();
    }

    public function atualizarCustomers($req, $id){
        //$input = Input::all();
        $customer = Customer::find($id);
        $customer = $customer->fill($req); 
        $customer->save();
        return $customer;

    }

}
?>