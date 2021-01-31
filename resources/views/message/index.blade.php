@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('messages.create') }}" class="btn btn-primary">Create</a>
                @foreach ($messages as $message)
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{ $message->user->name }}</h4>
                        <hr>
                        <p class="mb-0">{{ $message->message }}</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @if (Auth()->check() && $message->user->id == Auth()->user()->id)
                                <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('messages.destroy', $message->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            @endif
                            <a href="{{ route('messages.show', $message->id) }}" class="btn btn-primary">Show</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
