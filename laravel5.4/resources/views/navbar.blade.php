
<a href="/employee">Home</a><br>
<a href="/employee/create">Create</a><br>


@if(auth()->check())
<a href="/logout">LogOut</a><br>
({{auth()->user()->name}})
@else
<a href="/login">Login</a><br>
@endif
