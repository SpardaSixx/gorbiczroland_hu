@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">DEV Referenciák</h2>

        <div class="page-content">
            <div class="row">
                @foreach($references as $reference)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{$reference->url}}" target="_blank">
                        <div class="content-card mb-4">
                            <div class="content-image" style="background-image: url(/img/reference/reference_{{$reference->id}}.jpg);"></div>
                            <div class="content-info">
                                <p class="content-title mb-0">{{$reference->title}}</p>
                                <p class="content-subtitle mb-0">{{$reference->type}}, {{$reference->year}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
