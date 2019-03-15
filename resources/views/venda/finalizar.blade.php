@extends('layouts.application') @section('content')
<div class="m-content">
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--metal m-portlet--head-solid-bg">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--font-transform-u" style="color:#302B3E;">
                                <i class="la la-cart-plus"></i><span style="margin:24px;">Vendas <small>Pagamento</small></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                {{ Form::open(array('url' => 'venda/'.$venda->id.'/pagar')) }}
                <div class="row">
                
					<div class="col-md-6">
							<div class="form-group">
							{{ Form::label('formasPagamento', 'Forma de Pagamento') }}
							{{ Form::select('formasPagamento', $formasPagamento, null, array('class' => 'form-control selectpicker')) }}
							</div>					
					</div>
				
					<div class="col-md-6">
							<div class="form-group">
							{{ Form::label('valorPagamento', 'Valor') }} 
							{{ Form::number('valorPagamento', 0, array('class' =>'form-control','step'=>'any','min'=>'0')) }}						
							</div>
					</div>				
				
				</div>				
				{{ Form::submit('Adicionar Pagamento', array('class' => 'btn btn-primary')) }} 
                {{ Form::close() }}
                <br>
                    <div class="row">
                        <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Forma de Pagamento</th>
                                    <th>Valor</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pagamentos as $key => $value)
                                <tr>
                                    <td>{{ $value->formaPagamento->nome }}</td>
                                    <td>{{ $value->valor }}</td>
                                    <td>
                                        {{ Form::open(array('url' => 'venda/'.$value->id.'/removePagamento')) }}
                                            {{ Form::submit('Apagar', array('class' => 'btn	btn-sm btn-danger')) }} 
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>
                                Total Compra
                            </h5>
                            <h2 class="m--font-info">
                            <small>R$</small>{{ number_format($venda->valor, 2) }}
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                Valor Pago
                            </h5>
                            <h2 class="m--font-success">
                            <small>R$</small>{{ number_format($venda->valorRecebido, 2) }}
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                    <a href="{{ URL::to('venda') }}" class="btn btn-square btn-md blue btn-success"> Finalizar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
