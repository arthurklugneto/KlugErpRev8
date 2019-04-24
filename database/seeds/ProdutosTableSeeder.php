<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            ['id'=>'1','nome'=>'Iphone 8 Cinza Espacial 4,7 , 4g, 64gb, 12 Mp - Mq6g2br/a','codigo'=>'1134207697','caminhoFoto'=>'iphone.jpg','precoCusto'=>1750.00,'precoVenda'=>2899.00,'margem'=>0,'categoria_id'=>1,'fornecedor_id'=>1,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'2','nome'=>'Celular Samsung Galaxy S10 128gb 8gb Tela 6.1 G973f Branco','codigo'=>'1204948367','caminhoFoto'=>'galaxy.jpg','precoCusto'=>2550.80,'precoVenda'=>4319.00,'margem'=>0,'categoria_id'=>1,'fornecedor_id'=>2,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'3','nome'=>'Apple Ipad Pro A1980 Mtxr2lz/a 256gb De 11 12mp/7mp Ios','codigo'=>'1187233436','caminhoFoto'=>'ipad.jpg','precoCusto'=>3250.80,'precoVenda'=>5999.00,'margem'=>0,'categoria_id'=>2,'fornecedor_id'=>1,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'4','nome'=>'Tablet Samsung Galaxy Tab E Sm-t560','codigo'=>'1169375269','caminhoFoto'=>'galaxyTab.jpg','precoCusto'=>566.80,'precoVenda'=>899.00,'margem'=>0,'categoria_id'=>2,'fornecedor_id'=>2,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'5','nome'=>'Notebook Dell Inspiron I15-3567-m10c Ci3 4gb 1tb 15,6 Win10','codigo'=>'993631348','caminhoFoto'=>'dellNote.jpg','precoCusto'=>1760.50,'precoVenda'=>2428.00,'margem'=>0,'categoria_id'=>3,'fornecedor_id'=>4,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'6','nome'=>'Notebook Vaio Fit 15s I5-7200u 8gb 1tb 15.6 Fh Retroiluminad','codigo'=>'1000314105','caminhoFoto'=>'sonyNote.jpg','precoCusto'=>3250.22,'precoVenda'=>4168.11,'margem'=>0,'categoria_id'=>3,'fornecedor_id'=>3,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'7','nome'=>'Smarttv 55 Ultra Hd 4k Lg 55uk6360psf Ips Inteligência Artif','codigo'=>'1143543641','caminhoFoto'=>'tvLg.jpg','precoCusto'=>3000.11,'precoVenda'=>3333.85,'margem'=>0,'categoria_id'=>4,'fornecedor_id'=>5,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'8','nome'=>'Smart Tv Led 55 Uhd 4k Samsung Nu7100','codigo'=>'1142004780','caminhoFoto'=>'tvSamsung.jpg','precoCusto'=>3250.22,'precoVenda'=>3475.53,'margem'=>0,'categoria_id'=>4,'fornecedor_id'=>2,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'9','nome'=>'Nintendo Switch 32gb','codigo'=>'940558534','caminhoFoto'=>'switchNintendo.jpg','precoCusto'=>1240.00,'precoVenda'=>1685.00,'margem'=>0,'categoria_id'=>5,'fornecedor_id'=>7,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'10','nome'=>'Xbox One S 1tb','codigo'=>'1062869428','caminhoFoto'=>'xBox.jpg','precoCusto'=>1100.00,'precoVenda'=>1290.00,'margem'=>0,'categoria_id'=>5,'fornecedor_id'=>6,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['id'=>'11','nome'=>'Console Ps4 Pro 4k 1 Tb Novo Original Sony 7215','codigo'=>'1134551170','caminhoFoto'=>'ps4.jpg','precoCusto'=>1450.00,'precoVenda'=>2699.00,'margem'=>0,'categoria_id'=>5,'fornecedor_id'=>3,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
        ];

        $estoque = [
            ['quantidade'=>0,'produto_id'=>1,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>2,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>3,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>4,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>5,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>6,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>7,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>8,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>9,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>10,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
            ['quantidade'=>0,'produto_id'=>11,'created_at'=>Carbon\Carbon::now(),'updated_at'=>Carbon\Carbon::now()],
        ];

        DB::table('produtos')->insert($produtos);
        DB::table('estoque')->insert($estoque);
    }
}