@extends('app')



@section('content')
    

<form action="/service" method="post">
	@csrf
	<input type="text" name="name" autocomplete="off">
<button>Add Service</button>
@error('name'){{ $message }} @enderror
</form>

@forelse ($ses as $service)
    <li>{{ $service->name }}</li>
@empty
    <p>No Services</p>
@endforelse


@endsection