<?php

use Illuminate\Database\Seeder;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedores = [
            ['id'=>'1','nome'=>'Apple','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'2','nome'=>'Samsung','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'3','nome'=>'Sony','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'4','nome'=>'Dell','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'5','nome'=>'LG','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'6','nome'=>'Microsoft','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'7','nome'=>'Nintendo','tipo'=>'juridica','created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
        ];

        DB::table('fornecedors')->insert($fornecedores);
        
    }
}
