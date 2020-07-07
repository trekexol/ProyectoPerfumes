@extends('adminlte::page')

@section('title', 'Perfumista')

@section('content_header')
    <h1>Perfumista</h1>
@stop

@section('content')
<section class="content">
   
    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-9">
             @include('Perfumista.newBtn')
            </div>
            <div class="col-3">
                 @include('Perfumista.search')  
            </div>
         </div>
      </div>
      <div class="card-body p-0" style="display: block;">
        <table class="table">
            <thead>
              <tr>
               
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Pais</th>
                
                <th style="width: 25%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($vars as $var)
              <tr>
                
                <td>{{$var->nombre_primero  }}    {{$var->nombre_segundo}} </td>
                <td>{{$var->apellido_segundo  }}    {{$var->apellido_segundo}}</td>
                <td>{{$var->genero}}</td>
                <td>{{$var->id_pais}}</td>
                <td class="d-flex justify-content-between">
                    
                    <a class="btn btn-info btn-sm" href="{{action('PerfumistaController@edit', $var->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar
                    </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$var->id}}">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </button>
                    {{-- <a class="btn btn-danger btn-sm"  data-target="#modal-delete-{{$var->id}}" >
                        <i class="fas fa-trash">
                        </i>
                        Eliminar
                    </a> --}}
                   
                </td>
              </tr>
              @include('Perfumista.delete')

              @endforeach 
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer" style="display: block;">
       <div class="d-flex justify-content-sm-end">
        {{$vars->render()}}
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