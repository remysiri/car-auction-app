@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Blog</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Summary</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blog as $blogs)
                            <tr>
                                <th scope="row">{{$blogs->id}}</th>
                                <td>{{$blogs->title}}</td>
                                <td>{{$blogs->summary}}</td>
                                <td>{{$blogs->description}}</td>
                                <td>{{$blogs->created_at->toFormattedDateString()}}</td>
                                <td>{{$blogs->updated_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{ route('blog.edit', $blogs->id) }}">Edit</a>
                                    <form method="POST" action="{{ route("blog.destroy", $blogs->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">{{ __("Delete") }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="{{ route('blog.create') }}">Add</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection