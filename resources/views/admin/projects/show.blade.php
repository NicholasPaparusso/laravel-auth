@extends('layouts.app')

@section('content')
    <div class="container show d-flex align-items-center justify-content-center ">

        <div class="np-card col-6 my-4 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex pt-4 justify-content-between">
                <div class="d-flex" >
                    <h3 class="project-title mx-4">
                        {{$project->name}}
                    </h3>
                    <div class="edit-discard">
                        @include('widgets.delete')
                        @include('widgets.modify')
                        @include('widgets.previous')
                    </div>
                </h3>
                </div>
            </div>
            <div class="thumb my-4">
                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
            </div>
            <div class="content px-4">
                <p class="summary">
                    {{$project->summary}}
                </p>
                <p class="client">
                    Lavoro commisionato da: <span>{{$project->client_name}}</span>
                </p>
            </div>

        </div>

    </div>
@endsection
