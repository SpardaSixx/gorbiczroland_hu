@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">Music</h2>

        <div class="page-content">
            <div class="row">
                @foreach($musics as $music)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card">
                        <div class="content-image" style="background-image: url(/img/music/music_{{$music->id}}.jpg);"></div>
                        <div class="content-info">
                            <p class="content-title mb-0">{{$music->author}} - {{$music->album}}</p>
                            <p class="content-subtitle mb-0">{{$music->format}}, {{$music->year}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
