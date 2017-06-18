@extends('master')

@section('content')
   
        <form action="/employee" method="post">
            {{csrf_field()}}
            <input type="text" name="first_name" class="form-control" placeholder="Name" value="{{old('first_name')}}">
           <p> {{ $errors->first('first_name')}}</p>
            <input type="text" name="last_name" class="form-control" placeholder="Surname"value="{{old('last_name')}}">
           <p> {{ $errors->first('last_name')}}</p>


           <input {{oldHelper(old('gender'),'M')}} type="radio" name="gender" value="M">Male
           <input {{oldHelper(old('gender'),'F')}} type="radio" name="gender" value="F">Female
                <input  class="btn btn-primary" type="submit" value="save">
                <input  class="btn btn-reset" type="reset" value="cancal">
        </form>

@endsection
