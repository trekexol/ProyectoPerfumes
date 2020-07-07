@extends('adminlte::page')

@section('title', 'Intensidad Aromatica')

@section('content_header')
    <h1>Intensidad Aromatica</h1>
@stop

@section('content')
<section class="content">
   
    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-9">
             @include('Intensidad_Aromatica.newBtn')
            </div>
            <div class="col-3">
                 @include('Intensidad_Aromatica.search')  
            </div>
         </div>
      </div>
      <div class="card-body p-0" style="display: block;">
        <table class="table">
            <thead>
              <tr>
               
                <th>Tipo</th>
                <th>Iniciales</th>
                <th>Concentracion</th>
                <th>Descripcion</th>
               
                
                <th style="width: 25%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($variables as $variable)
              <tr>
                
                <td>{{$variable->tipo}} </td>
                <td>{{$variable->iniciales}}</td>
                <td>{{$variable->concentracion}} </td>
                <td>{{$variable->descripcion}}</td>
                
               
           
              </tr>
            <!--  @include('Variable_Formula.delete')

              @endforeach -->
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer" style="display: block;">
       <div class="d-flex justify-content-sm-end">
        {{$variables->render()}}
       </div>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>

@stop

@section('js')

    <script>
        @if(Session::has('success')) 
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success("{{Session::get('success')}}");
        @endif
    </script>
@endsection