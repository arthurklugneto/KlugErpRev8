<?php

namespace App\Services;

use App\Produto;
use DB;

class DashboardService{

    public function __construct(){}

    /**
     * Top Produto
     */
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

    /**
     * Vendas
     */
    public function getTotalVendas(){
        
        $valorTotal = DB::table('saidas')->sum('valor');
        return $valorTotal;

    }

    public function getVendasRecebidas(){

        $valorRecebido = DB::table('saidas')->sum('valorRecebido');
        return $valorRecebido;

    }

    public function getVendasReceber(){

        $total = $this->getTotalVendas();
        $recebido = $this->getVendasRecebidas();

        return $total - $recebido;

    }

    /**
     * Compras
     */
    public function getTotalCompra(){
        
        $valorTotal = DB::table('entradas')->sum('valor');
        return $valorTotal;

    }

    public function getComprasPagas(){

        $valorRecebido = DB::table('entradas')->sum('valorPago');
        return $valorRecebido;

    }

    public function getComprasPagar(){

        $total = $this->getTotalCompra();
        $pago = $this->getComprasPagas();

        return $total - $pago;

    }


}
