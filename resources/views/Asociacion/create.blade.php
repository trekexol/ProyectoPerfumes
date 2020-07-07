@extends('adminlte::page')

@section('title', 'Registrar Asociacion Nacional')

@section('content_header')
    <h1>Registrar Asociacion Nacional</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Registrar Asociacion Nacional</h1> --}}
        {{-- {{var_dump($errors)}} --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <form action="{{action('AsociacionController@index')}}" method="post" autocomplete="off" id="asociacion" enctype="multipart/form-data">
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label class="text-sm">Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Iniciales: </label>
                    <input type="text" class="form-control form-control-sm" name="iniciales" id="iniciales" placeholder="iniciales">
                    <span class="text-danger">{{ $errors->first('iniciales') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Region: </label>
                    <input type="text" class="form-control form-control-sm" name="region" id="region" placeholder="region">
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                </div>


                <div class="form-group">
                    <label class="text-sm">Pais debe estar en la url: </label>
                    <input type="text" class="form-control form-control-sm" name="id_pais" id="id_pais" placeholder="pais">
                    <span class="text-danger">{{ $errors->first('pais') }}</span>
                </div>

               
           

               
                        <div class="form-group">
                                <button  type="submit" class="btn btn-primary">Guardar</button>
                                <button href=" {{ url('variable') }}" type="reset" class="btn btn-danger">Cancelar</button>
                        </div>
              
           
            </div>      
          </div>

         
        </form>
    </div>
    
</div>

       
@endsection

@section('js')

{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> --}}
    <script>

$(document).ready(function() {
    $('#states').select2();
});
        $('form[id="variable"]').validate({
  rules: {
    nombre: {
        required: true,
        minlength: 2,
    },
    etiqueta: 'required',
    descripcion: {
      required: true,
    //   email: true,
    },
  },
  messages: {
    nombre: 'Este campo es requerido',
    etiqueta: 'Este campo es requerido',
    fecha_nacimiento: 'Este campo es requerido',
    descripcion: {
        minlength: 'El nombre tiene que tener al menos dos letras'
      }
  },
  errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
});

    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

    </script>

    <script>

    </script>
@stop