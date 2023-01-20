@extends('layouts.app')

@section('content')

    <div class="container index">


        <div class="d-flex justify-content-center align-items-center">
            <h3 class="mx-4">
                Lista dei progetti
            </h3>
            {{$projects->links()}}
        </div>

        @if (session('deleted'))

        <div class="container d-flex justify-content-center pt-5">
            <div class=" text-center w-25 alert alert-info" role="alert">
                {{session('deleted')}}
              </div>
        </div>

       @endif
        <div class="d-flex justify-content-center" >
            <a class="btn np-btn-order" href="{{ route('admin.projects.orderby' , ['name',  $direction])}}">Ordina per titolo</a>
            <a class="btn np-btn-order" href="{{ route('admin.projects.orderby' , ['id',  $direction])}}">Ordina per Id</a>
            <a class="btn np-btn-order" href="{{ route('admin.projects.orderby' , ['updated_at',  $direction])}}">Ordina per data di modifica</a>
        </div>
            <div class="row">
            @forelse ($projects as $project )
                <div class="col-3">
                        <div class="d-flex flex-column align-items-center justify-content-center np-card my-4 ">
                            <div class="">
                                <h5 class="mt-2">{{$project->id}}</h5>
                            </div>
                            <div class="thumb mt-1">
                                <img src="{{$project->cover_image}}" alt="{{$project->name}}">
                            </div>
                            <div class="content px-4">
                                <h3 class="project-title">
                                    <a href="{{route('admin.projects.show', $project)}}">{{$project->name}}</a>
                                </h3>
                            </div>
                            <div class="edit-discard w-100 px-5 pb-2 d-flex justify-content-around">
                                @include('widgets.delete',$project)
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
