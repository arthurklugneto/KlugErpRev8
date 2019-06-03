<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use View;
use App\Services\DashboardService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Entrada;
use App\Saida;
use App\Cliente;
use App\Produto;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    protected $dashBoardService;

    public function __construct(DashboardService $dashBoardService)
    {
        $this->middleware('auth');
        $this->dashBoardService = $dashBoardService;
    }

    public function index()
    {
        $produtoMaisVendido = $this->dashBoardService->getMaisVendido();

        $vendasTotal = $this->dashBoardService->getTotalVendas();
        $valorRecebido = $this->dashBoardService->getVendasRecebidas();
        $valorAReceber = $this->dashBoardService->getVendasReceber();

        $comprasTotal = $this->dashBoardService->getTotalCompra();
        $valorPago = $this->dashBoardService->getComprasPagas();
        $valorAPagar = $this->dashBoardService->getComprasPagar();
        
        return View::make('home')
        ->with('produtoMaisVendido', $produtoMaisVendido)

        ->with('vendasTotal', $this->formatMoney($vendasTotal))
        ->with('valorRecebido', $this->formatMoney($valorRecebido))
        ->with('valorAReceber', $this->formatMoney($valorAReceber))

        ->with('comprasTotal', $this->formatMoney($comprasTotal))
        ->with('valorPago', $this->formatMoney($valorPago))
        ->with('valorAPagar', $this->formatMoney($valorAPagar));

    }

    public function formatMoney($input){
        return 'R$'.$input;
    }

}


/*

    	$now = Carbon::now();
    	
    		
    	$saidas = DB::table('saidas')->whereMonth('dataVenda', '=', $now->month)->count();
    	
    	$topProdutoID = DB::table('saidas_produtos')->select('produto_id', DB::raw('COUNT(produto_id) AS occurrences'))
            ->groupBy('produto_id')
            ->orderBy('occurrences', 'DESC')
            ->limit(1)
            ->get();
        $hehe = json_decode($topProdutoID,true);
        
        if(!empty($hehe))
        {
        	$idMaisVendido = $hehe[0]['produto_id'];
        	$idQtdeMaisVendido = $hehe[0]['occurrences'];
        }
        else
        {
            $idMaisVendido = 0;
            $idQtdeMaisVendido = 0;
        }
        $produtoMaisVendido = Produto::find($idMaisVendido);
        $nomeProdutoMaisVendido = '';
    	
        if( $produtoMaisVendido )
        {
        	$nomeProdutoMaisVendido = $produtoMaisVendido->nome; 
        }
        
             
        $vendasRecebidasNoMes = DB::table('saidas_formas_pagamentos')->whereIn('forma_pagamentos_id', ['1', '2'])->whereMonth('created_at', '=', $now->month)->sum('valor');
        $contasRecebidasNoMes = DB::table('contas_receber')->whereMonth('dataRecebimento', '=', $now->month)->sum('valorRecebido');
        $contasPagasNoMes = DB::table('contas_pagar')->whereMonth('dataPagamento', '=', $now->month)->sum('valorPago');
        
        $query = DB::select("select sum(valor) as total from entradas_formas_pagamentos where entrada_id in (select entrada_id from entradas where valorPago != 0)");
        $comprasRecebidasNoMes = reset($query)->total;
        
        $consolidacaoMes = ($vendasRecebidasNoMes + $contasRecebidasNoMes) - ($contasPagasNoMes + $comprasRecebidasNoMes);
        
            
    	$dadosArray = array(
    			
    			'qtdVendas' => $saidas,
    			'topProduto' => $nomeProdutoMaisVendido,
                'topProdutoQtde' => $idQtdeMaisVendido,
                'vendasMes' => $vendasRecebidasNoMes,
    			'comprasMes' => $comprasRecebidasNoMes,
    			'contasReceberMes' => $contasRecebidasNoMes,
    			'contasPagasMes' => $contasPagasNoMes,
    			'consolidacao' => $consolidacaoMes
    			
    	);
    	return View::make('home')
    	->with('dados', $dadosArray);
*/
