@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('student.update',$student->id)}}" method="post">
                    @csrf
                    <div class="form-group" >
                        <label for="name">name</label>
                        <input value="{{ $student->name }}" type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="age">age</label>
                        <input value="{{$student->age}}" type="text" class="form-control" name="age">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input value="{{$student->email}}" type="text" class="form-control" name="email">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                    <a href="{{ route('students') }}">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection