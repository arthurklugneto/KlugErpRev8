<?php

use Illuminate\Database\Seeder;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entradas = [
            ['id'=>'1','fornecedor_id'=>1,'dataCompra'=>now(),'valor'=>0,'valorPago'=>0,'situacao'=>'aberta','created_at'=>now(),'updated_at'=>now()],
        ];

        
    }

    private function now()
    {
        return Carbon\Carbon::now();
    }
}
