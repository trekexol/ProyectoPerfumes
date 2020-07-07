@extends('adminlte::page')

@section('title', 'Editar Asociacion Nacional')

@section('content_header')
    <h1>Editar Asociacion Nacional</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Editar Asociacion Nacional</h1> --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="{{action('AsociacionController@update', $var->id)}}" method="post" autocomplete="off">
                    @method('PUT')
                @csrf
            <div class="example_form">
            <div class="form-group">
                    <label class="text-sm">Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre" value="{{$var->nombre}}" id="nombre" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Iniciales: </label>
                    <input type="text" class="form-control form-control-sm" name="iniciales" value="{{$var->iniciales}}" id="iniciales" placeholder="iniciales">
                    <span class="text-danger">{{ $errors->first('iniciales') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Region: </label>
                    <input type="text" class="form-control form-control-sm" name="region" value="{{$var->region}}" id="region" placeholder="region">
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Pais: </label>
                    <input type="text" class="form-control form-control-sm" name="id_pais" value="{{$var->id_pais}}" id="id_pais" placeholder="pais">
                    <span class="text-danger">{{ $errors->first('id_pais') }}</span>
                </div>
            </div>    
            
            </div>
          
        </div>
                </div>
                <div class="card-footer">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                               
                              
                                <a type="reset" class="btn btn-danger" href="{{action('VariableController@index')}}">
                                    Regresar
                                </a>

                        </div>
                </div>
            </form>
    </div>
    
</div>

       
@endsection

@section('js')
 
@stop