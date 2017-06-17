@extends('master')

@section('content')
    <p>  Index()</p>
<table class="table">

<tr>
<th>รหัส</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>เพศ</th>
</tr>

    
    @foreach($employees as $e)
        <tr> 
        
            <td><a href="/employee/{{ $e->id}}">{{ $e->id}}</a></td>
            <td> {{ $e->first_name}}</td>
            <td> {{ $e->last_name}}</td>
            <td> {{ $e->gender}}</td>
        </tr>   
    @endforeach


 </table>

 {{ $employees->links() }}

@endsection