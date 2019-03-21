<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProdutoService;
use App\Services\FotoService;
use Validator;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{

    protected $produtoService;
    protected $fotoService;
    
	public function __construct(ProdutoService $produtoService,FotoService $fotoService)
	{
        $this->middleware('auth');
        $this->produtoService = $produtoService;
        $this->fotoService = $fotoService;
	}
	
	public function index()
	{
		$registros = $this->produtoService->getAllByEstoque();
		
		return View::make('produto.index')
		->with('produtos', $registros);
	}
	
	public function create()
	{
		$categorias = $this->produtoService->getCategorias();
		$proximoCodigo = $this->produtoService->getProximoCodigo();
		
		return View::make('produto.create')
		->with('categorias', $categorias)
		->with('proximoCodigo',$proximoCodigo);
	}
	
	public function store(Request $request)
	{
        
		$rules = array(
				'codigo' => 'required|numeric',
				'nome' => 'required',
				'precoCusto' => 'required|numeric',
				'precoVenda' => 'required|numeric',
		);
		$validator = Validator::make(Input::all(), $rules);
	
		if ($validator->fails()) {
			return Redirect::to('produto/create')
			->withErrors($validator);
		} else {

            $fotoName = null;
    
            if( $request->fotoProduto != null ){
                if($this->fotoService->isValidPhoto($request->fotoProduto)){
                    $fotoName = $this->fotoService->storePhoto($request->fotoProduto);                  
                }else{
                    return Redirect::to('produto/create')
                    ->withErrors('A foto do produto deve ser no formato JPG ou PNG e ter no máximo 200KB de tamanho.');
                }
            }
            
			$this->produtoService->save(Input::all(),$fotoName);
	
			Session::flash('message', 'Produto adicionado com sucesso!');
			return Redirect::to('produto');
        }
        
	}
	
	public function show($id)
	{
		$registro = $this->produtoService->findById($id);
	
		return View::make('produto.show')
		->with('produto', $registro);
	}
	
	public function edit($id)
	{
		$registro = $this->produtoService->findById($id);;
		$categorias = $this->produtoService->getCategorias();
	
		return View::make('produto.edit')
		->with('produto', $registro)
		->with('categorias', $categorias);
	}
	
	public function update($id)
	{
        
		$rules = array(
				'codigo' => 'required',
				'nome' => 'required',
				'precoCusto' => 'required',
				'precoVenda' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('Produto/' . $id . '/edit')
			->withErrors($validator);
		} else {
		
			$this->produtoService->update(Input::all(),$id);
		
			Session::flash('message', 'Produto alterado com sucesso!');
			return Redirect::to('produto');
        }

    }
	
	public function destroy($id)
	{
		if( $this->produtoService->produtoTemMovimento($id) )
		{
			Session::flash('messageErro', 'Produto ja foi movimentado não é possível apagar');
			return Redirect::to('produto');
		}
		else
		{
            $this->fotoService->deletePhoto($id);
            $this->produtoService->remove($id);
            			
			Session::flash('message', 'Produto apagado com sucesso!');
			return Redirect::to('produto');
		}
	}
	
}
