<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FormasPagamentoTableSeeder::class,
            CategoriasProdutoTableSeeder::class,
            FornecedoresTableSeeder::class,
            ProdutosTableSeeder::class,
            ClientesTableSeeder::class,
            PlanoContasTableSeeder::class
        ]);
    }
}
