@extends('master')

@section('content')
   
        <form action="/employee/{{$employee -> id }}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name}}">
           <p> {{ $errors->first('first_name')}}</p>
            <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name}}">
           <p> {{ $errors->first('last_name')}}</p>
           <input type="radio" name="gender" value="M" {{radioHelpers($employee->gender , 'M') }} >Male
           <input type="radio" name="gender" value="F" {{radioHelpers($employee->gender , 'F') }}>Female
                <input  class="btn btn-primary" type="submit" value="save">
                <input  class="btn btn-reset" type="reset" value="cancal">
        </form>

@endsection