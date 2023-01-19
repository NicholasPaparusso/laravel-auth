@extends('layouts.app')

@section('content')
    <div class="container show d-flex align-items-center justify-content-center ">

        <div class="np-card col-6 my-4 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex pt-4 justify-content-between">
                <div class="d-flex" >
                    <p>
                        ID: {{$project->id}}
                    </p>
                    <h3 class="project-title ms-5">
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

                <div class="client d-flex ">
                    <p>
                        Data creazione: <span>{{date("d-m-Y h:i", strtotime($project->created_at))}}</span>
                    </p>
                    <p class="ps-3">
                        Data ultima modifica: <span>{{date("d-m-Y h:i", strtotime($project->updated_at))}}</span>
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
