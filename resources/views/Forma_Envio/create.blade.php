@extends('adminlte::page')

@section('title', 'Registrar Forma Envio')

@section('content_header')
    <h1>Registrar Forma Envio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <h1>Registrar Forma Envio</h1> --}}
        {{-- {{var_dump($errors)}} --}}
        <h2>Detalles Generales</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <form action="{{action('VariableController@getIndex')}}" method="post" autocomplete="off" id="variable" enctype="multipart/form-data">
                @csrf
            <div class="example_form">
                <div class="form-group">
                    <label class="text-sm">Tiempo Envio: </label>
                    <input type="text" class="form-control form-control-sm" name="tiempo_envio" id="tiempo_envio" placeholder="tiempo_envio">
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Transporte: </label>
                    <input type="text" class="form-control form-control-sm" name="transporte" id="transporte" placeholder="transporte">
                    <span class="text-danger">{{ $errors->first('transporte') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Coste: </label>
                    <input type="number" class="form-control form-control-sm" name="coste" id="coste" placeholder="coste">
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                </div>

                <div class="form-group">
                    <label class="text-sm">Extras: </label>
                    <input type="text" class="form-control form-control-sm" name="extras" id="extras" placeholder="extras">
                    <span class="text-danger">{{ $errors->first('extras') }}</span>
                </div>
           

               
                        <div class="form-group">
                                <button action="{{url('/')}}" type="submit" class="btn btn-primary">Guardar</button>
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