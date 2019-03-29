@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($blogs as $blog)
                        <tr>

                            <td>{{$loop-> iteration}}</td>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->age}}</td>
                            <td>{{$blog->email}}</td>
                            <td><a href="{{route('blog.edit',$blog->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('blogs.store')}}" method="post">
                    @csrf
                <div class="form-group" >
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="age">age</label>
                    <input type="text" class="form-control" name="age">
                </div>

                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <button class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection