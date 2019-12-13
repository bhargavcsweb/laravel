@extends('app')


@section('content')
<h2>Customer Create</h2>

<form action="/customers/create" method="post">
	@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="email">
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" id="Email" name="email">
  </div>
<button class="btn btn-primary">Add New Customer</button>



</form>
<br>
<a class="btn " href="{{url('/customers')}}">< Back To List</a>


@endsection