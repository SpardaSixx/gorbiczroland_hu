@extends('layouts.default')
 
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 position-relative">
            <div class="home-hero">
                <h2>Kezdő whisk(e)y gyűjtő, haladó webfejlesztő, profi PlayStation kedvelő és gyűjtő</h2>
        
                <p>A menüpontok nagyjából lefedik a fontos dolgokat, de ha bármi kérdés merülne fel, az elérhetőségeim is fellelhetőek!</p>
            
                <a href="{{route('contact')}}" class="btn btn-purple">Kapcsolat</a>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <img src="/img/home.png" class="w-75">
        </div>
    </div>

    <h2 class="page-title my-5">Kategóriák</h2>

    <div class="row">
        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('stack')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_stack.jpg);">
                    <span>Stack</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('references')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_references.jpg);">
                    <span>Referenciák</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('consoles')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_consoles.jpg);">
                    <span>Konzolok</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('games')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_games.jpg);">
                    <span>Játékok</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('booze')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_booze.jpg);">
                    <span>Booze</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3">
            <a href="{{route('music')}}" class="link">
                <div class="main-category" style="background-image: url(/img/main_music.jpg);">
                    <span>Zene</span>
                </div>
            </a>
        </div>
    </div>
@endsection
