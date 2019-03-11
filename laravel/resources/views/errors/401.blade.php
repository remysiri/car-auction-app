@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="throwError">{{ $exception->getMessage() }}</h2>
            </div>
        </div>
    </div>
@endsection