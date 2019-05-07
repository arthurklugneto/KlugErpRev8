<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vendedor;

class Saida extends Model
{
	protected $table = 'saidas';
	
	public function cliente()
	{
        return $this->hasOne('App\Cliente', 'id', 'cliente_id');
    }
    
    public function vendedor()
    {
        return $this->hasOne('App\Vendedor', 'id', 'vendedor_id');
    }
	
}
