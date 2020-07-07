@extends('adminlte::page')

@section('title', 'Registrar Perfumista')

@section('content_header')
    <h1>Registrar Perfumista</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Registrar Perfumista</h1> --}}
        {{-- {{var_dump($errors)}} --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <form action="{{action('PerfumistaController@store')}}" method="post" autocomplete="off" id="vars" enctype="multipart/form-data">
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label class="text-sm">Primer Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre_primero" id="nombre_primero" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('nombre_primero') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Segundo Nombre: </label>
                    <input type="text" class="form-control form-control-sm" name="nombre_segundo" id="nombre_segundo" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('nombre_primero') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Primer Apellido: </label>
                    <input type="text" class="form-control form-control-sm" name="apellido_primero" id="apellido_primero" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('nombre_primero') }}</span>
                </div>
                <div class="form-group">
                    <label class="text-sm">Segundo Apellido: </label>
                    <input type="text" class="form-control form-control-sm" name="apellido_segundo" id="apellido_segundo" placeholder="nombre">
                    <span class="text-danger">{{ $errors->first('apellido_primero') }}</span>
                </div>

                <div class="form-group">
                    <label for="genero" >Genero:</label>
                    <select name="genero" id="genero" class="form-control">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    </select>
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