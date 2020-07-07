@extends('adminlte::page')

@section('title', 'Actualizar Productor')

@section('content_header')
    <h1>Actualizar Productor</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Actualizar Productor</h1> --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <form action="{{action('ProductorController@update', $var->id)}}" method="post" autocomplete="off">
                    @method('PUT')
                @csrf
            <div class="example_form">
                <div class="form-group">
                        <label class="text-sm">Nombre: </label>
                        <input type="text" class="form-control form-control-sm" name="nombre" value="{{$var->nombre}}" id="nombre" placeholder="Nombre">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                    <label class="text-sm">Pagina Web: </label>
                    <input type="text" class="form-control form-control-sm" name="pagina_web" value="{{$var->pagina_web}}" id="pagina_web" placeholder="pagina_web">
                    <span class="text-danger">{{ $errors->first('pagina_web') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Calle o Avenida: </label>
                    <input type="text" class="form-control form-control-sm" name="calle_avenida" value="{{$var->calle_avenida}}" id="calle_avenida" placeholder="calle o avenida">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Codigo Postal: </label>
                    <input type="text" class="form-control form-control-sm" name="codigo_postal" value="{{$var->codigo_postal}}" id="codigo_postal" placeholder="codigo postal">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Asociacion que se recibe po url: </label>
                    <input type="text" class="form-control form-control-sm" name="id_asociacion" value="{{$var->id_asociacion}}" id="id_asociacion" placeholder="id_asociacion">
                    <span class="text-danger">{{ $errors->first('id_asociacion') }}</span>
                </div>

            </div>    
            
            </div>
          
        </div>
                </div>
                <div class="card-footer">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                               
                              
                                <a type="reset" class="btn btn-danger" href="{{action('ProductorController@index')}}">
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