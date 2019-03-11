@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Users</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Auctions joined</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>23</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                                    <form method="POST" action="{{ route("users.destroy", $user->id) }}">
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
                            <td><a href="{{ route('users.create') }}">Add</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection