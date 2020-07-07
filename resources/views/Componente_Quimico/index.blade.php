@extends('adminlte::page')

@section('title', 'Componente Quimico')

@section('content_header')
    <h1>Componente Quimico</h1>
@stop

@section('content')
<section class="content">
   
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <div class="row">
            <div class="col-9">
             @include('Componente_Quimico.newBtn')
            </div>
            <div class="col-3">
                 @include('Componente_Quimico.search')  
            </div>
         </div>
      </div>
      <div class="card-body p-0" style="display: block;">
        <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">id</th>
                <th>Nombre</th>
                <th>Formula Quimica</th>
                <th>Ipc</th>
                <th>Tsca Cas</th>
                <th>Otros Ingredientes</th>
                <th style="width: 25%">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($variables as $variable)
              <tr>
                <td>{{$variable->nombre}} </td>
                <td>{{$variable->formula_quimica}}</td>
                <td>{{$variable->ipc}}</td>
                <td>{{$variable->tsca_cas}}</td>
                <td>{{$variable->otros_ingredientes}}</td>
                <td class="d-flex justify-content-between">
                    
                    <a class="btn btn-info btn-sm" href="{{action('VariableController@edit', $variable->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar
                    </a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$variable->id_variable}}">
                            <i class="fas fa-trash">
                            </i>
                            Eliminar
                        </button>
                    {{-- <a class="btn btn-danger btn-sm"  data-target="#modal-delete-{{$variable->id_variable}}" >
                        <i class="fas fa-trash">
                        </i>
                        Eliminar
                    </a> --}}
                   
                </td>
              </tr>
              @include('Variable.delete')

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