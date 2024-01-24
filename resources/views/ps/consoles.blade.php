@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">Konzolok</h2>

        <div class="page-content">
            <div class="row">
                @foreach($consoles as $console)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card">
                        <div class="content-image" style="background-image: url(/img/console/console_{{$console->id}}.jpg);"></div>
                        <div class="content-info">
                            <p class="content-title mb-0">{{$console->name}} {{$console->type ? $console->type : ''}}</p>
                            <p class="content-subtitle mb-0">{{$console->company}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
