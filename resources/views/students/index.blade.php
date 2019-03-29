@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Edit</th>

                    </tr>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->email}}</td>
                            <td><a href="{{route('students.edit',$student->id)}}">Edit</a></td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>

        <br>

        <div class="row bg-info">
            <div class="col-md-8">
                <form action="{{route('students.store')}}" method="post">
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