@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($messages as $message)
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{ $message->user->name }}</h4>
                        <hr>
                        <p class="mb-0">{{ $message->message }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
