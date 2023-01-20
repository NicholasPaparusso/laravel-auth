@extends('layouts.app')

@section('content')

   @if (session('message'))

    <div class="container d-flex justify-content-center pt-5">
        <div class=" w-25 alert alert-info" role="alert">
            {{session('message')}}
          </div>
    </div>

   @endif

    <div class="container pt-5 show d-flex align-items-center justify-content-center ">
        <div class="np-card col-6  d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex pt-4 justify-content-between">
                <div class="d-flex" >
                    <p>
                        ID: {{$project->id}}
                    </p>
                    <h3 class="project-title ms-5">
                        {{$project->name}}
                    </h3>
                    <div class="edit-discard">
                        @include('widgets.delete', $project)
                        @include('widgets.modify')
                        @include('widgets.previous')
                    </div>
                </h3>
                </div>
            </div>
            @if ($project->cover_image)
            <div class="thumb my-4">
                <img src="{{asset('storage/'.$project->cover_image)}}" alt="{{$project->original_image_name}}">
            </div>
            @endif

            <div class="content px-4">
                <p class="summary">
                    {!!$project->summary!!}
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
