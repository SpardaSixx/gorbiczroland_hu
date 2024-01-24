@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">Booze</h2>

        <div class="page-content">
            <div class="row">
                @foreach($boozes as $booze)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card">
                        <div class="content-image" style="background-image: url(/img/booze/booze_{{$booze->id}}.jpg);"></div>
                        <div class="content-info">
                            <p class="content-title mb-0">{{$booze->brand}} - {{$booze->name}}</p>
                            <p class="content-subtitle mb-0">{{$booze->category}}, {{$booze->size}} dl</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
