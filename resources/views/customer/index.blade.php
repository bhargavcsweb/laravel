@extends('app')
<style type="text/css">
	table,tr,td,th{
border: 1px solid;

	}
	td,th{
		padding:10px; 
	}
</style>



@section('content')
<h2>Customer</h2>
<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
	</tr>

   @forelse($customers as $customer)
<tr>
	<td>{{$customer->name}}</td>
	<td>{{$customer->email}}</td>
</tr>
   
</table>
<br>
<a href="{{url('/customers/create')}}">Add New Customer</a>
   @empty
   <p>No Customer</p>
   @endforelse
@endsection