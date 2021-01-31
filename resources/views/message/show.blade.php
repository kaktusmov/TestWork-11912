@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Author: {{ $message->user->name }}</h4>
                    <hr>
                    <p class="mb-0">Text: {{ $message->message }}</p>
                    <p class="mb-0">Created at: {{ $message->created_at }}</p>
                    <p class="mb-0">Updated at: {{ $message->updated_at }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
