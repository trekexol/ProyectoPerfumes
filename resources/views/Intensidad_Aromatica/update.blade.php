@extends('adminlte::page')

@section('title', 'Actualizar Intensidad Aromatica')

@section('content_header')
    <h1>Actualizar Intensidad Aromatica</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Actualizar Intensidad Aromatica</h1> --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="{{action('VariableController@update', $variable->id_pais)}}" method="post" autocomplete="off">
                    @method('PUT')
                @csrf
            <div class="example_form">
            <div class="form-group">
                    <label class="text-sm">Tipo: </label>
                    <input type="text" class="form-control form-control-sm" name="tipo" id="tipo" placeholder="tipo">
                    <span class="text-danger">{{ $errors->first('tipo') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Iniciales: </label>
                    <input type="text" class="form-control form-control-sm" name="iniciales" id="iniciales" placeholder="iniciales">
                    <span class="text-danger">{{ $errors->first('iniciales') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Concentracion: </label>
                    <input type="text" class="form-control form-control-sm" name="concentracion" id="concentracion" placeholder="concentracion">
                    <span class="text-danger">{{ $errors->first('concentracion') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Descripcion: </label>
                    <input type="text" class="form-control form-control-sm" name="descripcion" id="descripcion" placeholder="descripcion">
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