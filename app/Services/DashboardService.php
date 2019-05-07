<?php

namespace App\Services;

use App\Produto;
use DB;

class DashboardService{

    public function __construct(){}

    public function getMaisVendido(){
        
        $topProdutoID = DB::table('saidas_produtos')->select('produto_id', DB::raw('ROUND(SUM(quantidade)) AS occurrences'))
        ->groupBy('produto_id')
        ->orderBy('occurrences', 'DESC')
        ->limit(1)
        ->get();

        $topProdutoIDData = json_decode($topProdutoID,true);
        $topSeller = Produto::find($topProdutoIDData[0]['produto_id']);
        $quantity = $topProdutoIDData[0]['occurrences'];
        $dataAsJson = json_decode($topSeller,true);
        $dataAsJson['occurrences'] = $quantity;
        return $dataAsJson;

    }

    public function getEstatisticasVendas(){
        
    }

}
