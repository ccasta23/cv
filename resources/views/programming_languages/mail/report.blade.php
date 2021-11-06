@extends('layouts.base')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <div class="card mb-3 shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        @isset($programming_language->image)
                            <img src="{{asset('storage/' . $programming_language->image)}}" class="img-fluid rounded-start" alt="{{$programming_language->name}}">
                        @else
                            <img src="https://gqspcolombia.org/wp-content/themes/consultix/images/no-image-found-360x260.png" class="img-fluid rounded-start" alt="{{$programming_language->name}}">
                        @endisset
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$programming_language->name}}
                            </h5>
                            <p class="card-text">{{$programming_language->description}}</p>
                            <p class="card-text"><small class="text-muted">Version: {{$programming_language->actual_version}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="alert alert-success text-center">Frameworks</h2>
        </div>
    </div>
    <div class="row mt-1 mb-4">
        @if(sizeof($programming_language->frameworks)==0)
            <div class="col">
                <h3 class="alert alert-warning">No Frameworks found for {{$programming_language->name}}</h3>
            </div>
        @else
            @foreach($programming_language->frameworks as $framework)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow">
                        <img src="https://gqspcolombia.org/wp-content/themes/consultix/images/no-image-found-360x260.png" class="card-img-top" alt="{{$framework->name}}">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$framework->name}}

                            </h5>
                            <p class="card-text">{{$framework->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
