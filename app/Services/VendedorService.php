<?php

namespace App\Services;

use App\Vendedor;

class VendedorService
{

    public function __construct(){}

    public function getAll(){
        return Vendedor::all();
    }

    public function findById($id){
        return Vendedor::find($id);
    }

    public function save($inputs){
        $entry = new Vendedor;
        $entry->nome = $inputs['nome'];
        $entry->codigo = $inputs['codigo'];
        $entry->comissao = $inputs['comissao'];
        $entry->save();
    }

    public function update($inputs,$id){
        $entry = $this->findById($id);
        $entry->nome = $inputs['nome'];
        $entry->codigo = $inputs['codigo'];
        $entry->comissao = $inputs['comissao'];
        $entry->save();
    }

    public function remove($id){
        $entry = Vendedor::find($id);
        $entry->delete();
    }

}