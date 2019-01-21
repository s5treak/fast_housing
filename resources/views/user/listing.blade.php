@extends('web.master')


@section('content')

<!-- Dashboard Container -->
<div class="dashboard-container">

	@include('web.sidebar')
    
    <div class="all">
    <!-- This is where you will include all the user's listings -->


   <h3>Howdy, {{Auth::user()->name}}!</h3>
    <span>We are glad to see you again!</span>


<div class="container">
<div class="row">
    <div class="col">
    <div class="table">
    <table>
         @if(count($listings) > 0)
        <tr> 
         <th>Address</th>
         <th>categories</th>
        <th>Location</th> 
            <th>Duration</th>
              <th>Price</th>
            
               <th style="padding-left:12%;">Action</th>
        </tr> 
      
        
        @foreach($listings as $listing)
        <tr><td>{{$listing->name}}</td>
            <td>{{$listing->cat_name}}</td>
            <td>{{$listing->location}}</td>
            <td>{{$listing->duration}} Months</td>
            <td>{{$listing->price}}</td>
            <td>{{$listing->description}}</td>
            <td>{{$listing->images->pics}}</td>
            <td><a href="{{ route('edit',$listing->id)}}" class="btn btn-primary">edit</a></td>
            <td><a href="{{ route('delete',$listing->id)}}" class="btn btn-danger">delete</a></td>
            
        </tr>
        
        
        @endforeach
          @endif
    </table>
    
    
    
    
    </div>
    </div>
    
    </div>        
        
        </div>




    

    </div>















</div>    


@endsection