@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 position-relative">
            <div class="home-hero">
                <h2>FullStack fejlesztő</h2>
        
                <p class="mb-0">Bootstrap 5 - SASS</p>
                <p class="mb-0">Vanilla JS - Vue.js</p>
                <p class="mb-0">PHP - Laravel</p>
            
                <a href="{{route('contact')}}" class="btn btn-purple mt-3">Kapcsolat</a>
            </div>
        </div>

        <div class="col-12 col-md-6 text-center text-md-end desktop-only">
            <img src="/img/home.png" class="w-75">
        </div>
    </div>

    <br><br>

    <h2 class="page-title">Referenciák</h2>

    <div class="text-center">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($references as $reference)
                <div class="swiper-slide">
                    {{$reference->title}}
                    <a href="{{$reference->url}}" target="_blank">
                        <img src="{{$reference->getImage()}}">
                    </a>
                </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
@endsection
