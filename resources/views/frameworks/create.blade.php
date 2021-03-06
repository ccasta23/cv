@extends('layouts.app')

@section('title') CVCC | Create Framework for {{$programming_language->name}} @endsection

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center"> Create Framework for {{$programming_language->name}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{route('frameworks.store', $programming_language)}}">
                {{--Debe ser dentro del formulario - Agregar Cross Site Request Forgery--}}
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{old('description')}}</textarea>
                </div>
                {{--<div class="row">
                    <div class="mb-3 col-6">
                        <label for="release_year" class="form-label">Release Year</label>
                        <input type="number" class="form-control" id="release_year" name="release_year"
                            value="{{old('release_year')}}"
                        >
                    </div>
                    <div class="mb-3 col-6">
                        <label for="actual_version" class="form-label">Actual Version</label>
                        <input type="text" class="form-control" id="actual_version" name="actual_version" value="{{old('actual_version')}}">
                    </div>
                </div>--}}
                {{--<div class="mb-3 form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        id="status" name="status"
                        {{old('status') ? 'checked': ''}}
                    >
                    <label class="form-check-label" for="status">??Active?</label>
                </div>--}}
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/programming-language/{{$programming_language->slug}}" class="btn btn-danger">Back</a>
            </form>
        </div>
        @if($errors->any())
            <div class="row mt-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
            </div>
        @endif
    </div>
@endsection
