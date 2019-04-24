<?php

use Illuminate\Database\Seeder;

class FormasPagamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $formasPagamento = [
            ['nome'=>'Dinheiro','tipo' => 'vista','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['nome'=>'Cartão de Débito','tipo' => 'vista','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['nome'=>'Cartão de Crédito','tipo' => 'prazo','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['nome'=>'Cheque','tipo' => 'vista','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['nome'=>'Depósito Bancário','tipo' => 'vista','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()]
        ];
        
        DB::table('forma_pagamentos')->insert($formasPagamento);

    }
}
