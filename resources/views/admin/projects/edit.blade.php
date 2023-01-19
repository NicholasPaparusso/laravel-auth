@extends('layouts.app')

@section('content')

<div class="container py-5 form-container ">
    <h3 class="text-center">Modifica {{$project->name}}</h3>
    <div class="row">

        <div class="col-5 offset-3">
            <form action="{{route('admin.projects.update', $project)}}" method="POST">
            @csrf
            @method('PUT')
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror resize" id="name" name="name" value="{{old('name',$project->name)}}" aria-describedby="emailHelp">

                @error('name')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror
              </div>

              <div class="mb-3">
                <label for="client_name" class="form-label">Cliente</label>
                <input type="text" class="form-control  @error('client_name') is-invalid @enderror resize" name="client_name"  value="{{old('client_name',$project->client_name)}}"  id="client_name">

                @error('client_name')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Thumb</label>
                <input type="text" class="form-control  @error('cover_image') is-invalid @enderror" name="cover_image" placeholder="Inserisci Url immagine"  value="{{old('cover_image',$project->cover_image)}}"  id="exampleInputPassword1">


                @error('cover_image')
                <p class="invalid-feedback">
                  {{$message}}
                </p>
                @enderror
              </div>

              <div class="mb-3">
                <label for="summary" class="form-label">Sommario</label>
               <textarea class="form-control  @error('summary') is-invalid @enderror" name="summary" id="summary" cols="30" rows="10">{{old('summary',$project->summary)}}</textarea>

               @error('summary')
               <p class="invalid-feedback">
                 {{$message}}
               </p>
               @enderror
              </div>

              <button type="submit" class="btn np-btn">invio</button>

        </form></div>
        <div class="col-4">
            @if ($errors->any())

            <div class="ms-5 alert alert-danger" role="alert">
                <ul>
                    @foreach ( $errors->all() as $error )
                        <li class="py-1">{{$error}}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        </div>

    </div>


</div>

@endsection
