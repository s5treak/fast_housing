@extends('web.master')


@section('content')

<!-- Dashboard Container -->
<div class="dashboard-container">

	@include('web.sidebar')
    
    <div class="all">
    <!-- This is where you will include all the user's listings -->


   <h3>Howdy, {{Auth::user()->name}}!</h3>
    <span>We are glad to see you again!</span>







    

    </div>















</div>    


@endsection