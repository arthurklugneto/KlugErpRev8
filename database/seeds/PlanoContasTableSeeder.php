<?php

use Illuminate\Database\Seeder;

class PlanoContasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planoContas = [
            ['id'=>'1','nome'=>'Recebimentos','margem'=>0,'tipo'=>'receita','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'2','nome'=>'Pagamentos','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'3','nome'=>'Recebimento Cartão de Crédito','margem'=>4.25,'tipo'=>'receita','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'4','nome'=>'Água','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'5','nome'=>'Aluguel','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'6','nome'=>'Salários','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'7','nome'=>'Benefícios','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'8','nome'=>'Estoque','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'9','nome'=>'Internet e Telefone','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'10','nome'=>'Pagamento Cartão','margem'=>0,'tipo'=>'despesa','created_at'=>now(),'updated_at'=>now()],
            ['id'=>'11','nome'=>'Recebimento Bancário','margem'=>1.25,'tipo'=>'receita','created_at'=>now(),'updated_at'=>now()],
        ];

        DB::table('plano_contas')->insert($planoContas);
    }
    private function now()
    {
        return Carbon\Carbon::now();
    }
}
