@extends('master')

@section('content')
    <h3>This is product:{{$id}}</h3>

    @if($qty >0 )
        <p> Qty:{{$qty }} Pcs</p>
    @else 
        <p> Out of stork</p>
     @endif

     
     @foreach($name as $n)
     {{$n}}

     @endforeach
    
@endsection