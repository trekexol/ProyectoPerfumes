@extends('adminlte::page')

@section('title', 'Crear Example')

@section('content_header')
    <h1>Crear Example</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Crear Obra</h1> --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="{{action('VariableController@getIndex', $variable->id_variable)}}" method="post" autocomplete="off">
                    @method('PUT')
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label>Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="name" value="{{$variable->nombre}}" id="name" placeholder="Nombre">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label>Etiqueta: </label>
                    <input type="text" class="form-control form-control-sm" name="lastname" value="{{$variable->etiqueta}}" id="lastname" placeholder="Apellido">
                    <span class="text-danger">{{ $errors->first('etiqueta') }}</span>
                </div>

                <div class="form-group">
                    <label>Descripcion: </label>
                    <input type="text" class="form-control form-control-sm" name="fecha_nacimiento" value="{{$variable->descripcion}}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                </div>
            </div>    
            
            </div>
          
        </div>
                </div>
                <div class="card-footer">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                               
                              
                                <a type="reset" class="btn btn-danger" href="{{action('VariableController@getIndex')}}">
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