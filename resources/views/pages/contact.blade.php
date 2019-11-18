@extends('layout.app')

@section('content')
        <h1>{{ $title }}</h1>
	@if(count($discription) > 0)
		@foreach($discription as $a)
			<li>{{ $a }}</li>
		@endforeach
	@endif
@endsection