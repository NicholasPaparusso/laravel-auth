@extends('layouts.app')

@section('content')
    <div class="container index">
        <div class="d-flex justify-content-center align-items-center">
            <h3 class="mx-4">
                Lista dei progetti
            </h3>
            {{$projects->links()}}


        </div>
            <div class="row">
            @forelse ($projects as $project )
                <div class="col-3">
                    <a class="d-flex flex-column align-items-center justify-content-center" href="{{route('project.show', $project)}}">
                        <div class="np-card my-4 ">
                            <div class="thumb mt-3">
                                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
                            </div>
                            <div class="content px-4">
                                <h3 class="project-title">
                                    {{$project->name}}
                                </h3>
                            </div>
                            <div class="edit-discard w-100 px-5 pb-3 d-flex justify-content-around">
                                @include('widgets.delete')
                                @include('widgets.info')
                                @include('widgets.modify')
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <span>Nessun progetto trovato</span>
            @endforelse

            </div>
    </div>
@endsection
