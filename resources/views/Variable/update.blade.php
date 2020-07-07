@extends('adminlte::page')

@section('title', 'Editar Variable')

@section('content_header')
    <h1>Editar Variable</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Editar Variable</h1> --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="{{action('VariableController@update', $variable->id)}}" method="post" autocomplete="off">
                    @method('PUT')
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label>Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre" value="{{$variable->nombre}}" id="nombre" placeholder="Nombre">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label>Etiqueta: </label>
                    <input type="text" class="form-control form-control-sm" name="etiqueta" value="{{$variable->etiqueta}}" id="etiqueta" placeholder="etiqueta">
                    <span class="text-danger">{{ $errors->first('etiqueta') }}</span>
                </div>

                <div class="form-group">
                    <label>Descripcion: </label>
                    <input type="text" class="form-control form-control-sm" name="descripcion" value="{{$variable->descripcion}}" id="descripcion" placeholder="descripcion">
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
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