
@extends('web.master')


@section('content')
<div class="dashboard-container">
	@include('web.sidebar')
	<!-- Dashboard Content -->
    <h3>Howdy, {{Auth::user()->name}}!</h3>
    <span>We are glad to see you again!</span>
</div>
@endsection
