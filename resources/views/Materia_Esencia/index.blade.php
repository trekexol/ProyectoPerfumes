@extends('adminlte::page')

@section('title', 'Materia Esencia')

@section('content_header')
    <h1>Materia Esencia</h1>
@stop

@section('content')
<section class="content">
   
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-9">
             @include('Materia_Esencia.newBtn')
            </div>
            <div class="col-3">
                 @include('Materia_Esencia.search')  
            </div>
         </div>
      </div>
      <div class="card-body p-0" style="display: block;">
        <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Parte</th>
                <th>Naturaleza</th>
                <th>Punto Ebullicion</th>
                <th>IPC</th>
                <th>IPC Alterno</th>
                <th>TSCA CAS</th>
                <th>Descripcion Visual</th>
                <th>Tipo</th>
                <th>Solubilidad</th>
                <th>Proceso</th>
                <th>Descripcion Proceso</th>
                <th style="width: 25%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($variables as $variable)
              <tr>
                <td>{{$variable->nombre}} </td>
                <td>{{$variable->estado}}</td>
                <td>{{$variable->parte}}</td>
                <td>{{$variable->naturaleza}} </td>
                <td>{{$variable->punto_ebullicion}}</td>
                <td>{{$variable->ipc}}</td>
                <td>{{$variable->ipc_alter}}</td>
                <td>{{$variable->tsca_cas}}</td>
                <td>{{$variable->descripcion_visual}} </td>
                <td>{{$variable->tipo}}</td>
                <td>{{$variable->solubilidad}}</td>
                <td>{{$variable->proceso}} </td>
                <td>{{$variable->descproceso}}</td>
                <td class="d-flex justify-content-between">
                    
                    <a class="btn btn-info btn-sm" href="{{action('MateriaEsenciaController@edit', $variable->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar
                    </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$variable->id_variable}}">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </button>
                    {{-- <a class="btn btn-danger btn-sm"  data-target="#modal-delete-{{$variable->id}}" >
                        <i class="fas fa-trash">
                        </i>
                        Eliminar
                    </a> --}}
                   
                </td>
              </tr>
              @include('MateriaEsencia.delete')

              @endforeach
              
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