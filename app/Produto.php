<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CategoriasProduto;
use Fornecedor;


class Produto extends Model
{

	public function categoria()
	{
		return $this->hasOne('App\CategoriasProduto', 'id', 'categoria_id');
    }
    
    public function fornecedor()
	{
		return $this->hasOne('App\Fornecedor', 'id', 'fornecedor_id');
	}
	
}
