@extends('layouts.default')
 
@section('content')
    <h2 class="page-title">Stack</h2>

    <div class="page-content">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="stack-type mb-3">
                    <h3 class="text-center mb-3">FrontEnd</h3>

                    @foreach($frontend as $stack)
                    <p class="stack frontend mb-1 d-inline-block">{{$stack->technology}}</p>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="stack-type mb-3">
                    <h3 class="text-center mb-3">BackEnd</h3>

                    @foreach($backend as $stack)
                    <p class="stack backend mb-1 d-inline-block">{{$stack->technology}}</p>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="stack-type mb-3">
                    <h3 class="text-center mb-3">Egyéb</h3>

                    @foreach($other as $stack)
                    <p class="stack other mb-1 d-inline-block">{{$stack->technology}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
