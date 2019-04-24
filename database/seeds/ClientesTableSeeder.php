<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            ['id'=>'1','nome'=>'Arthur Klug Neto','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'2','nome'=>'Steve Jobs','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'3','nome'=>'Mark Zukenberg','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'4','nome'=>'Elon Musk','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'5','nome'=>'Neil Degrass Tyson','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'6','nome'=>'Stephen Hawking','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
        ];

        DB::table('clientes')->insert($clients);
    }
}
