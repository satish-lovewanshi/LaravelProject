@extends('admin.adminlayout') @section('content')
<h1>Contact Details</h1>
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
                <th scope="col">S.no.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $value)
            <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->message}}</td>
                    <td>
                        <a href="del/{{$value->id}}" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></a>
                    </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
    <h2 class='navbar-right'>{{$contact->links()}}</h2>
</div>
@endsection