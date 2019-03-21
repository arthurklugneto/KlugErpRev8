@extends('layouts.application') @section('content')
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 256px;
    height: 256px;
}
</style>
<div class="m-content">
    <div class="row">
        <div class="col-md-12">
            <div class="m-portlet m-portlet--metal m-portlet--head-solid-bg">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--font-transform-u" style="color:#302B3E;">
                                <i class="flaticon-gift"></i><span style="margin:24px;">Produtos</span>
                            </span>
                            <h3 class="m-portlet__head-text m--font-primary ">
                            <a href="{{ URL::to('produto') }}" class="m-portlet__nav-link btn btn-danger m-btn m-btn--air">
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
                {{ Form::model($produto, array('route' => array('produto.update', $produto->id), 'method' => 'PUT')) }}

                    <div class="form-group">
                    {{ Form::label('codigo', 'Código') }}
                    {{ Form::number('codigo', Input::old('codigo'), array('class'=>'form-control','min'=>'1')) }}
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <img id='img-upload' src='{{ url("storage/products/{$produto->caminhoFoto}") }}' onerror="this.src='{{ url("storage/noPhoto.jpg") }}';"/>
                    </div>
                        
                    <div class="form-group">
                    {{ Form::label('codigoEan', 'Código de Barras') }}
                    {{ Form::text('codigoEan', Input::old('codigoEan'), array('class'	=>'form-control')) }}
                    </div>

                    <div class="form-group">
                    {{ Form::label('nome', 'Nome') }}
                    {{ Form::text('nome', Input::old('nome'), array('class'	=>'form-control')) }}
                    </div>
                        
                    <div class="form-group">
                    {{ Form::label('precoCusto', 'Preço de Custo') }}
                    {{ Form::number('precoCusto', Input::old('precoCusto'), array('class'	=>'form-control','step'=>'any','min'=>'0')) }}
                    </div>
                        
                    <div class="form-group">
                    {{ Form::label('precoVenda', 'Preço de Venda') }}
                    {{ Form::number('precoVenda', Input::old('precoVenda'), array('class'	=>'form-control','step'=>'any','min'=>'0')) }}
                    </div>
                        
                    <div class="form-group">
                    {{ Form::label('margem', 'Margem de Lucro') }}
                    {{ Form::number('margem', Input::old('margem'), array('class'	=>'form-control','step'=>'any','min'=>'0')) }}
                    </div>
                        
                    <div class="form-group">
                    {{ Form::label('categoria_id', 'Categoria') }} 
                    {{ Form::select('categoria_id', $categorias, null, array('class' => 'form-control selectpicker')) }}
                    </div>

                    {{ Form::submit('Gravar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                    <script>
                        $(document).ready( function() {
                            $(document).on('change', '.btn-file :file', function() {
                            var input = $(this),
                                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                            input.trigger('fileselect', [label]);
                            });

                            $('.btn-file :file').on('fileselect', function(event, label) {
                                
                                var input = $(this).parents('.input-group').find(':text'),
                                    log = label;
                                
                                if( input.length ) {
                                    input.val(log);
                                } else {
                                    if( log ) alert(log);
                                }
                            
                            });
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    
                                    reader.onload = function (e) {
                                        $('#img-upload').attr('src', e.target.result);
                                    }
                                    
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                            $("#fotoProduto").change(function(){
                                readURL(this);
                            }); 	
                        });
                        </script>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
