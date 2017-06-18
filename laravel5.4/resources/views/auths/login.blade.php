@extends('master')

@section('content')
<h1>Login</h1>   
 <form action="" method="post">
            {{csrf_field()}}
            <input type="email" name="email" class="form-control" placeholder="Email" >
            <input type="password"  name="password" class="form-control" placeholder="password" >
          
                <input  class="btn btn-primary" type="submit" value="save">
                <input  class="btn btn-danger" type="reset" value="cancal">
       
                
        </form>
@endsection
