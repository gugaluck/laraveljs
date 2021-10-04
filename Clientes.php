<?php

namespace App\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo dos Clientes
 *
 * @package Model
 * @author  Roberto Oswaldo Klann
 * @since   02/10/2018
 */
class Clientes extends Model {

    protected $table      = 'clientes';
    protected $fillable   = array('Cep', 'Cidade', 'Eendereco', 'Fax', 'IDCliente', 'NomeCompanhia', 'NomeContato', 'Pais', 'Regiao', 'Telefone', 'Titulo Cortesia');
    protected $primaryKey = 'IDCliente';
    public $timestamps    = false;

    /**
     * Retorna todos os clientes cadastrados.
     *
     * @return Clientes
     */
    public function getAllClientes() {
        return self::all();
    }

    /**
     * Retorna o cliente com o Id recebido por parâmetro.
     *
     * @return Clientes
     */
    public function getCliente($iId) {
        $oCliente = self::find($iId);

        if(is_null($oCliente)) {
            return false;
        }

        return $oCliente;
    }

    /**
     * Deleta o cliente que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteClienteFromId($iId) {
        $oCliente = self::find($iId);

        if(is_null($oCliente)) {
            return false;
        }

        return $oCliente->delete();
    }

    /**
     * Realiza o Update no cliente que veio por parâmetro.
     *
     * @return Cliente
     */
    public function updateClienteFromId($iId) {
        $oCliente = self::find($iId);

        if(is_null($oCliente)) {
            return false;
        }

        $oInput = Input::all();

        $oCliente->fill($oInput);
        $oCliente->save();

        return $oCliente;
    }

    /**
     * Cadastra um novo cliente.
     *
     * @return Cliente
     */
    public function saveCliente() {
        $oInput = Input::all();

        $oCliente = new Clientes($oInput);

        $oCliente->save();

        return $oCliente;
    }

}
