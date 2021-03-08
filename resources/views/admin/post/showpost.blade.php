@extends('admin.adminlayout') @section('content')
<h1>All Pages Post </h1>
<div class='navbar-right'>
    <a href="{{route('post-add')}}" class='btn btn-primary'>ADD New</a>
</div>
    <!-- error and success message -->
    @if(session()->has('message'))
    <div class='alert alert-dismissable alert-success' >
        <h1>{{session('message')}}</h1>
    </div>
    @endif
<div>
<table class="table table-bordered ">
        <thead>
            <tr >
                <th scope="col">Page Name</th>
                <th scope="col">Section title</th>
                <th scope="col">Post title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->page_title}}</th>
                    <td>{{$post->section_title}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td><img src="{{asset('uploads/'.$post->image)}}" style='width:50px;height:50px;' alt="">{{$post->image}}</td>
                    <td>
                        <a href="post-edit/{{$post->id}}" class='btn btn-primary tbn-xs'><i class='fa fa-pencil'></i></a>
                        <a href="delete/{{$post->id}}" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a>
                    </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
    <h2 class='navbar-right'>{{$posts->links()}}</h2>
</div>
@endsection