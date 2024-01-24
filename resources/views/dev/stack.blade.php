@extends('layouts.default')
 
@section('content')
    <div class="container">
        <h2 class="page-title">DEV Stack</h2>

        <div class="page-content">
            <div class="row">
                @foreach($stacks as $stack)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="content-card mb-4">
                        <div class="content-info {{$stack->getType()}}">
                            <h4>{{$stack->technology}}</h4>
                            <p class="content-subtitle mb-0">{{$stack->experience}} év tapasztalat</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
