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
        DB::table('forma_pagamentos')->insert([
            'nome' => 'Dinheiro',
        ]);
        DB::table('forma_pagamentos')->insert([
                'nome' => 'Cartão de Débito',
        ]);
        DB::table('forma_pagamentos')->insert([
                'nome' => 'Cartão de Crédito',
        ]);
        DB::table('forma_pagamentos')->insert([
            'nome' => 'Cheque',
        ]);
        DB::table('forma_pagamentos')->insert([
            'nome' => 'Depósito Bancário',
        ]);
    }
}
