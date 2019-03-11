@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Auction Status</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Auction #</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($statuses as $status)
                            <tr>
                                <th scope="row">{{$status->id}}</th>
                                <td>DE4FG332</td>
                                <td>{{$status->name}}</td>
                                <td>{{str_limit($status->description), 3}}</td>
                                <td>{{$status->created_at->toFormattedDateString()}}</td>
                                <td>{{$status->updated_at->diffForHumans()}}</td>
                                <td>
                                    <a href="">Edit</a>
                                    <form method="POST" action="">
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
                            <td><a href="">Add</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection