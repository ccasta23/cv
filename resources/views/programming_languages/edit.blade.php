@extends('layouts.app')

@section('title') CVCC | Edit {{$programming_language->name}} @endsection

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center"> Edit {{$programming_language->name}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="/programming-language/{{$programming_language->slug}}" enctype="multipart/form-data">
                {{--Debe ser dentro del formulario - Agregar Cross Site Request Forgery--}}
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name',$programming_language->name)}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control">{{old('description', $programming_language->description)}}</textarea>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="release_year" class="form-label">Release Year</label>
                        <input type="number" class="form-control" id="release_year" name="release_year" value="{{old('release_year', $programming_language->release_year)}}">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="actual_version" class="form-label">Actual Version</label>
                        <input type="text" class="form-control" id="actual_version" name="actual_version" value="{{old('actual_version',$programming_language->actual_version)}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status"
                                {{old('status',$programming_language->status) ? 'checked' : ''}}
                            >
                            <label class="form-check-label" for="status">¿Active?</label>
                        </div>
                    </div>
                    <div class="col-6">
                        {{--<label for="image" class="form-label">Image</label>--}}
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/programming-language" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
    @isset($programming_language->image)
        <img src="{{asset('storage/' . $programming_language->image)}}" class="img-fluid rounded-start" alt="{{$programming_language->name}}">
    @else
        <img src="https://gqspcolombia.org/wp-content/themes/consultix/images/no-image-found-360x260.png" class="img-fluid rounded-start" alt="{{$programming_language->name}}">
    @endisset
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
@endsection
