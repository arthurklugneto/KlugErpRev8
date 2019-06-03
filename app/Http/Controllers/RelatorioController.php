<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use View;
use App\Services\RelatorioService;
use Excel;
use App\Exports\EstoqueExport;
use App\Exports\SaidasExport;
use App\Exports\EntradaExport;

class RelatorioController extends Controller
{
    
    protected $relatorioService;

	public function __construct(RelatorioService $relatorioService)
	{
        $this->middleware('auth');
        $this->relatorioService = $relatorioService;
	}
	
	public function index()
	{
		return View::make('relatorio.index');
	}
	
	public function relatorioSaidas()
	{
        $dataInicial = Input::get('dataInicial').' 00:00:00';
        $dataFinal = Input::get('dataFinal'). '23:59:59';
        
        return Excel::download(new SaidasExport($dataInicial,$dataFinal),'vendas.xlsx');		
	}
	
	public function relatorioEntradas()
	{
		$dataInicial = Input::get('dataInicial').' 00:00:00';
        $dataFinal = Input::get('dataFinal'). '23:59:59';
        
        return Excel::download(new EntradaExport($dataInicial,$dataFinal),'compras.xlsx');
	}
	
	public function relatorioEstoque()
	{
		return Excel::download(new EstoqueExport(),'estoque.xlsx');
	}
	
}
