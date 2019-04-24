<?php

use Illuminate\Database\Seeder;

class CategoriasProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categorias = [
            ['id'=>'1','nome'=>'Celulares','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'2','nome'=>'Tablet','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'3','nome'=>'Notebooks','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'4','nome'=>'TVs','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'5','nome'=>'Videogames','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()]
        ];

        DB::table('categorias_produtos')->insert($categorias);
        
    }
}
