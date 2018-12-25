@extends('web.master')


@section('content')

<!-- Dashboard Container -->
<div class="dashboard-container">

	@include('web.sidebar')
    
    <div class="approved">
    <!-- This is where you will include the approved listings -->


    <h3>Howdy, {{Auth::user()->name}}!</h3>
    <span>We are glad to see you again!</span>







    

    </div>















</div>    


@endsection