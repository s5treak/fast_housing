@if(count($errors) >  0)

 @foreach($errors->all() as $error)

 <small class="alert btn-danger">{{$error}}</small>

@endforeach

@endif