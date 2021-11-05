@extends('layouts.base')

@section('title') CVCC | Programming Languages @endsection

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center">Programming Languages</h1>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Release Year</th>
                    <th>Actual Version</th>
                    <th>Status</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach($programming_languages as $programming_language)
                        <tr>
                            <td>{{$programming_language->id}}</td>
                            <td>{{$programming_language->name}}</td>
                            <td>{{$programming_language->description}}</td>
                            <td>{{$programming_language->release_year}}</td>
                            <td>{{$programming_language->actual_version}}</td>
                            <td class="{{$programming_language->status ? 'table-success' : 'table-danger'}} ">
                                {{$programming_language->status ? 'Active' : 'Inactive'}}
                            </td>
                            <td><a
                                    href="/programming-language/{{$programming_language->slug}}"
                                    class="btn btn-outline-primary"
                                >
                                    Show
                                </a>
                            </td>
                            <td><a
                                    href="/programming-language/{{$programming_language->slug}}/edit"
                                    class="btn btn-outline-success"
                                >
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form method="POST" action="/programming-language/{{$programming_language->slug}}">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        class="btn btn-outline-danger"
                                        value="Delete"
                                        onclick="return confirm('Delete {{$programming_language->name}}?')"
                                    >
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn btn-success" href="/programming-language/create">Create new Programming Language</a>
        </div>

    </div>
@endsection
