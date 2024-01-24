@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">Játékok</h2>

        <div class="page-content">
            <div class="row">
                @foreach($games as $game)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card">
                        <div class="content-image" style="background-image: url(/img/game/game_{{$game->id}}.jpg);"></div>
                        <div class="content-info">
                            <p class="content-title mb-0">{{$game->title}}</p>
                            <p class="content-subtitle mb-0">{{$game->platform}}, {{$game->release}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
