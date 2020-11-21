@extends('adminlte.master')

@section('content')

    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Post {{$posts->id}} </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/posts/{{$posts->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value=" {{ old('title', $posts->title) }}" placeholder="Enter Title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" class="form-control" id="body" name="body" value=" {{ old('body', $posts->body) }}" placeholder="Body">
                        
                        @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                    </div>
                <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            </div>
    </div>

@endsection