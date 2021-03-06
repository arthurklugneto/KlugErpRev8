@extends('layouts.application') @section('content')
<div class="m-content">
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--metal m-portlet--head-solid-bg">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--font-transform-u" style="color:#302B3E;">
                                <i class="flaticon-user-settings"></i><span style="margin:24px;">Vendedor</span>
                            </span>
                            <h3 class="m-portlet__head-text m--font-primary ">
                            <a href="{{ URL::to('vendedores') }}" class="m-portlet__nav-link btn btn-danger m-btn m-btn--air">
                                    Cancelar
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                <!-- VALIDATIONS ERRORS----------------------------- -->
                <div class="row">
                    <div class="col-md-12">{{ Html::ul($errors->all()) }}</div>
                </div>
                <!-- ----------------------------------------------- -->
                {{ Form::open(array('url' => 'vendedores')) }}

                    <div class="form-group">
                        {{ Form::label('codigo', 'Código*') }} 
                        {{ Form::number('codigo', 0, array('class'	=>'form-control','step'=>'1','min'=>'0')) }}
					</div>

					<div class="form-group">
						{{ Form::label('nome', 'Nome') }} 
						{{ Form::text('nome', Input::old('nome'), array('class' =>'form-control')) }}
					</div>

                    <div class="form-group">
                        {{ Form::label('comissao', 'Comissão') }} 
                        {{ Form::number('comissao', 0, array('class'	=>'form-control','step'=>'any','min'=>'0')) }}
					</div>

					{{ Form::submit('Gravar', array('class' => 'btn btn-primary')) }}
				
				{{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
