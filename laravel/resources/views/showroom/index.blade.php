@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Showroom</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Auction #</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Expires</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($showroom as $showrooms)
                            <tr>
                                <th scope="row">{{$showrooms->id}}</th>
                                <td>DE4FG332</td>
                                <td>{{$showrooms->title}}</td>
                                <td>{{$showrooms->created_at->toFormattedDateString()}}</td>
                                <td>{{$showrooms->updated_at->diffForHumans()}}</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('showroom.edit', $showrooms->id) }}">Edit</a>
                                    <form method="POST" action="{{ route("showroom.destroy", $showrooms->id) }}">
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
                            <td><a href="{{ route('showroom.create') }}">Add</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection