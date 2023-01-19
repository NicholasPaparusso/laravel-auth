@extends('layouts.app')

@section('content')
    <div class="container index">
        <h3>
            Lista dei progetti
        </h3>
            <div class="row">

            @forelse ($projects as $project )
                <div class="col-3">
                    <div class="np-card my-4 d-flex flex-column align-items-center justify-content-center">
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
                </div>
            @empty
                <span>Nessun progetto trovato</span>
            @endforelse

            </div>

    </div>
@endsection
