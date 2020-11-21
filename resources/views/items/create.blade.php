@extends('adminlte.master')

@section('content')

@endsection

@push('scripts')

    <script>
        var wrappers = document.getElementsByName("wrappers");
        var items = ["ini", "contoh"];
        console.log("ini items", items)
    </script>

@endpush