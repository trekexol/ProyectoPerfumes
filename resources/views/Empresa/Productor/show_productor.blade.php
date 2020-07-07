@extends('adminlte::page')

@section('title', 'Productor')

@section('content_header')
    <div class="row">
        <div class="col-6">
            <h1>Empresa - Nombre Empresa (Abrev)</h1>
        </div>
        <div class="col-6">
            <div class="input-group input-group-sm justify-content-end">
                <div class="btn-group">
                    <a class="btn btn-warning btn-sm" href="">
                        <i class="fas fa-file-download">
                        </i>
                    </a>
                    <a class="btn btn-info btn-sm" href="{{action('FraganciaController@edit', 1)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                    </a>
                    {{-- data-target="#modal-delete-{{$example->pk}}" --}}
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-1">
                        <i class="fas fa-trash">
                        </i>
                    </button>
                  </div>
            </div>
           
        </div>
    </div>
    @include('Producto.Fragancia.delete')
    
@stop

@section('content')
<div class="card">
    {{-- {{action('ExampleController@store')}} --}}
                <form action="" method="post" autocomplete="off" id="example" enctype="multipart/form-data">
                @csrf
                <section class="content">

                    <!-- Default box -->
                    <div class="card card-solid">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">Nombre Producto</h3>
                                    
                            <div class="col-12">
                                <img src="https://ifrafragrance.org/images/default-source/member-logos/basfffcaa70776ce4bf99a855d50d4725267.png?sfvrsn=2e24717c_0" alt="" class="product-image" style="height: 60%; width: 60%; align-self: center" >
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <h3 class="my-3">Nombre Empresa (Abrev)</h3>
                            <div class="row">
                                <div class="col-6">
                                    <p>Telefono: </p>
                                    <p>Url: </p>
                                    <p>Direccion:</p>
                                </div>

                                <div class="col-6">
                                    <p>Organizacion: Principal </p>
                                    <p>Tipo Empresa: Productor</p>
                                    <p>Acvtivo:</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ action('CatalogoProductorController@show', 1) }}">
                                        <h2>¡Haz click aqui para conocer nuestro catalogo!</h2>
                                    </a>
                                </div>
                            </div>
              
              
              
                          </div>
                        </div>
                        
                        <div class="row mt-4">
                          <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                              <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="false">Descripcion</a>
                              <a class="nav-item nav-link active" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="true">Ingredientes</a>
                              <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Fases</a>
                            </div>
                          </nav>
                          <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Descripcion </div>
                            <div class="tab-pane fade active show" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Ingredientes </div>
                            <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Fases </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
              
                  </section>

            </form>

      
@endsection
