@extends('adminlte::page')

@section('title', 'Nuestros Productroes')

@section('content')
<section class="content">
    <div class="card">
         
      <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="card-body">
                    <div class="card-title">
                        <h2>¡Conoce a nuestros productores!</h2>
                    </div>
                    <div class="card-title">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nunc justo, hendrerit vitae nulla quis, venenatis lobortis mi. 
                          Nam quis felis faucibus dolor dignissim fermentum. Nullam mollis mi turpis, ut viverra arcu elementum eu.
                           Donec quis mauris ultricies, rhoncus risus a, hendrerit est. Sed sed consectetur neque. Nullam sed ullamcorper dui. Donec accumsan faucibus rutrum. Ut risus odio, ornare sit amet fringilla at, facilisis at velit. Praesent eu augue eros. Nunc faucibus ipsum at mauris feugiat, in finibus neque dapibus. Vestibulum ut hendrerit nunc. Donec quis enim ligula. Aenean euismod porta quam, eget egestas ante dapibus in. Vivamus nec fermentum nisi, id maximus eros.
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card-body">
                    <div class="card-title">
                        <h4>¿Quieres formar parte de nuestro equipo de Productores?</h4>
                    </div>
                    <div class="card-title">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nunc justo, hendrerit vitae nulla quis, venenatis lobortis mi. 
                          Nam quis felis faucibus dolor dignissim fermentum. Nullam mollis mi turpis, ut viverra arcu elementum eu.
                           Donec quis mauris ultricies, rhoncus risus a, hendrerit est. Sed sed consectetur neque. Nullam sed ullamcorper dui. Donec accumsan faucibus rutrum. Ut risus odio, ornare sit amet fringilla at, facilisis at velit. Praesent eu augue eros. Nunc faucibus ipsum at mauris feugiat, in finibus neque dapibus. Vestibulum ut hendrerit nunc. Donec quis enim ligula. Aenean euismod porta quam, eget egestas ante dapibus in. Vivamus nec fermentum nisi, id maximus eros.
                    </div>
                    <a href="">¡Pues haz click aqui!</a>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 9; $i++)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ action('ProductorController@show', 1) }}">
                            <img src="https://ifrafragrance.org/images/default-source/member-logos/basfffcaa70776ce4bf99a855d50d4725267.png?sfvrsn=2e24717c_0" alt="" style="width: 250px; height: 250px">
                        </a>
                    </div>
                </div>
              </div>
            @endfor
        </div>
        
          </div>
    </div>
  </section>
@stop

