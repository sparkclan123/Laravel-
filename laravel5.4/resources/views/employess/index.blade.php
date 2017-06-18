@extends('master')

@section('content')
    <p>  Index</p>
<table class="table">

<tr>
<th>รหัส</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>เพศ</th>
<th>ปุ่ม</th>
<th>DeleTE</th>
</tr>

    
    @foreach($employees as $e)
        <tr> 
        
            <td><a href="/employee/{{ $e->id}}">{{ $e->id}}</a></td>
            <td> {{ $e->first_name}}</td>
            <td> {{ $e->last_name}}</td>
            <td> {{ $e->gender}}</td>
            <td><a href="/employee/{{ $e ->id}}/edit" class="btn btn-primary" type="text" value="edit"</td>
            
            <td><form action="/employee/{{$e -> id}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" value="Delete">
                </form></td>
        </tr>   
    @endforeach


 </table>

 {{ $employees->links() }}

@endsection