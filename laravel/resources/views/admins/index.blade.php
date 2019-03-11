@extends('layouts.backoffice')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Beheerders</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <th scope="row">{{$admin->id}}</th>
                                <td>{{$admin->username}}</td>
                                <td>{{$admin->email}}</td>
                                <td>
                                    <a href="{{ route('users.edit', $admin->id) }}">Edit</a>
                                    <form method="POST" action="{{ route("users.destroy", $admin->id) }}">
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

                <div class="card">
                    @if(Session::has('success_msg'))
                        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
                    @endif
                    <div class="card-header">Hoofdbeheerders</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($superadmins as $superadmin)
                            <tr>
                                <th scope="row">{{$superadmin->id}}</th>
                                <td>{{$superadmin->username}}</td>
                                <td>{{$superadmin->email}}</td>
                                <td>
                                    <a href="{{ route('users.edit', $superadmin->id) }}">Edit</a>
                                    <form method="POST" action="{{ route("users.destroy", $superadmin->id) }}">
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