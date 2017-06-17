@extends('master')

@section('content')
    <p> Show page:{{$employee->id}}</p>
    <p> Show name:{{$employee->first_name}}</p>
    <p> Show lastName:{{$employee->last_name}}</p>
    <p> Show Gender:{{$employee->gender}}</p>


@endsection