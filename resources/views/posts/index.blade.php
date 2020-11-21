@extends('adminlte.master')

@section('content')

    <div class="mt-3 ml-3">
        <div class="card">
            <!-- <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body p-0">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                <a class="btn btn-primary mb-2" href="/posts/create">Create New Posts</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $key => $posts)
                            <tr>
                                <td> {{ $key + 1 }}</td>
                                <td> {{ $posts->title }}</td>
                                <td> {{ $posts->body }}</td>
                                <td style="display: flex;"> 
                                    <a href="/posts/{{$posts->id}}" class="btn btn-info btn-sm">show</a> 
                                    <a href="/posts/{{$posts->id}}/edit" class="btn btn-default btn-sm">edit</a> 
                                    <form action="/posts/{{$posts->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No Posts</td>
                            </tr>
                        @endforelse

                    
                    
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

    </div>

@endsection