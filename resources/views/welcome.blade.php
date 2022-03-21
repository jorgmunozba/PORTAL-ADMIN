@extends('layouts.appfront')

@section('content')
<div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
        <div class="carousel-item @if($loop->index==0) active @endif">
            <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->frase}}">
            <div class="carousel-caption d-none d-md-block pb-5">
                <h5>{{$item->descripcion}}</h5>
                <a href="{{$item->link}}" class="btn btn-secondary positive-ls-2 btn-outline font-weight-bold text-2 btn-py-3 px-5 mt-2">VER MÁS</a>
            </div>
        </div>
        @empty
        @endforelse
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

    <div class="container-fluid">
        <h1 class="pt-5 pb-5 text-center " style="font-family: 'Lato', sans-serif;"">{{$config->slogan}}</h1>
        <div class="container pb-1">
            <div class="row mt-5 mb-5 justify-content-center text-center lead" style="font-family: 'Lato', sans-serif;">
                
                <div class="col-sm-3"><p>{{$config->frase_1}}</p></div>
                <div class="col-sm-3"><p>{{$config->frase_1}}</p></div>
                <div class="col-sm-3"><p>{{$config->frase_1}}</p></div>

            </div>
        </div>
</div>



<div class="container">
    <div class="row mt-5 mb-5 justify-content-center text-center align-items-center" style="background-color: BlueViolet;">
        <div class="col-sm-8 bg-light  pt-3 pb-5 " >
            <div class="row">
            <div class="col-sm-12 pb-3">
                <h2 style="color: BlueViolet; font-family: 'Lato', sans-serif;">Nuestros servicios</h2>
            </div>
            @forelse ($producto as $item)
                <div class="col-sm-4">
                    <div class="card">
                        <a href="/">
                            <img style="width:220px; height:120px" src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}">
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-block" style="background-color:BlueViolet; color:white;">{{$item->nombre}}</a>
                    </div>
                </div>
            @empty
            @endforelse
            </div>
        </div>
        <div class="col-sm-4" style="background-color: BlueViolet;">
            <p class="display-4 text-white" style="font-family: 'Lato', sans-serif;">  CONTACTO <br> {{$config->celular}}</p>
        </div>
    </div>
</div>

<div class="container">
    
        @forelse ($post as $r)
        <div class="row mb-4">
            <div class="col-sm-4">
                <img style="width:100%; height:100;"src="/img/post/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
            </div>
            <div class="col-sm-8 border rounded-right bg-light row align-items-center">
                <div class="col-sm-12">
                    <h3>{{$r->nombre}}</h3>
                    <p>{{$r->description}}</p>
                    <span class="small">{{$r->created_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse
    
</div>
@endsection



