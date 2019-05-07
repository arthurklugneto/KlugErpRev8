<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VendedorService;
use Validator;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class VendedoresController extends Controller
{
    
    protected $vendedorService;
    
	public function __construct(VendedorService $vendedorService)
	{
        $this->middleware('auth');
        $this->vendedorService = $vendedorService;
    }
    
    public function index()
	{
		$registros = $this->vendedorService->getAll();
		
		return View::make('vendedores.index')
		->with('vendedores', $registros);
	}
	
	public function create()
	{
		return View::make('vendedores.create');
	}
	
	public function store(Request $request)
	{
        
		$rules = array(
                'nome'       => 'required',
                'codigo'     => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('vendedores/create')
			->withErrors($validator);
		} else {
		
			$this->vendedorService->save(Input::all());
		
			Session::flash('message', 'Vendedor adicionado com sucesso!');
			return Redirect::to('vendedores');
        }
	}
	
	public function show($id)
	{
		$registro = $this->vendedorService->findById($id);
		
		return View::make('vendedores.show')
		->with('vendedor', $registro);
	}
	
	public function edit($id)
	{
		$registro = $this->vendedorService->findById($id);
		
		return View::make('vendedores.edit')
		->with('vendedor', $registro);
	}
	
	public function update($id)
	{
		$rules = array(
				'nome'       => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('vendedores/' . $id . '/edit')
			->withErrors($validator);
		} else {
			
			$this->vendedorService->update(Input::all(),$id);
			
			Session::flash('message', 'Vendedor atualizado com sucesso!');
			return Redirect::to('vendedores');
			
		}
	}
	
	public function destroy($id)
	{
		$this->vendedorService->remove($id);
		
		Session::flash('message', 'Vendedor removido com sucesso!');
		return Redirect::to('vendedores');
	}

}