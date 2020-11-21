@extends('adminlte.master')

@section('content')

    <div class="mt-3 ml-3">
        <h4>
            {{ $posts->title}}
        </h4>
        <p>
            {{ $posts->body}}
        </p>
    </div>

@endsection