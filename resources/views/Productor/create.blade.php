@extends('adminlte::page')

@section('title', 'Registrar Productor')

@section('content_header')
    <h1>Registrar Productor</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Registrar Productor</h1> --}}
        {{-- {{var_dump($errors)}} --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <form action="{{action('ProductorController@store')}}" method="post" autocomplete="off" id="vars" enctype="multipart/form-data">
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label class="text-sm">Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" placeholder="Nombre">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Pagina Web: </label>
                    <input type="text" class="form-control form-control-sm" name="pagina_web" id="pagina_web" placeholder="pagina web">
                    <span class="text-danger">{{ $errors->first('pagina_web') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Calle o Avenida: </label>
                    <input type="text" class="form-control form-control-sm" name="calle_avenida" id="calle_avenida" placeholder="calle o avenida">
                    <span class="text-danger">{{ $errors->first('calle_avenida') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Codigo Postal: </label>
                    <input type="text" class="form-control form-control-sm" name="codigo_postal" id="codigo_postal" placeholder="codigo postal">
                    <span class="text-danger">{{ $errors->first('codigo_postal') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Asociacion que se recibe po url: </label>
                    <input type="text" class="form-control form-control-sm" name="id_asociacion" id="id_asociacion" placeholder="id_asociacion">
                    <span class="text-danger">{{ $errors->first('id_asociacion') }}</span>
                </div>

               
               
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href=" {{ url('productor') }}"  class="btn btn-danger">Regresar</a> 
                        </div>
              
           
            </div>      
          </div>

         
        </form>
    </div>
    
</div>

       
@endsection
