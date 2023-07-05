<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>
<body>
@include('header')
@extends('layouts.app')
@section('content')



<div class="container">
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav> --}}
        <div class="">
            <div class="">
                <div class="">
                    <div class="">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($productos as $pro)
                        <div class="col-lg-3">
     
                                     <div class="card" style="margin-bottom: 20px; height: 95%;">
                                     <img src="{{ asset('images/' . $pro->imagen) }}" class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px; display: block;"
                                     alt="{{ $pro->nombre }}">
                                
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->nombre }}</h6></a>
                                    <p>${{ $pro->precio }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                      <input type="hidden" value="{{ $pro->precio }}" id="price" name="price"> 
                                        <input type="hidden" value="{{ $pro->imagen }}" id="img" name="img">
                                      {{-- <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug"> --}} 
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

</body>
</html>
