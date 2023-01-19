@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="np-card my-4 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-between">
                <div class="d-flex" >
                    <h3 class="project-title mx-4">
                        {{$project->name}}
                    </h3>
                    @include('widgets.delete')
                    @include('widgets.modify')
                </h3>
                </div>
            </div>
            <div class="thumb m-4">
                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
            </div>
            <div class="content px-4">


            </div>

        </div>

    </div>
@endsection
