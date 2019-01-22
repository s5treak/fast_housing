
@extends('web.master')


@section('content')
<div class="dashboard-container">
	@include('web.sidebar')
	<!-- Dashboard Content
		================================================== -->
		<div class="dashboard-content-container" data-simplebar>
			<div class="dashboard-content-inner" >
				
				<!-- Dashboard Headline -->
				<div class="dashboard-headline">
					<h3>Messages</h3>

					<!-- Breadcrumbs -->
					<nav id="breadcrumbs" class="dark">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Messages</li>
						</ul>
					</nav>
				</div>
		
					<div class="messages-container margin-top-0">

						<div class="messages-container-inner">

							<!-- Messages -->
							<div class="messages-inbox">
								<div class="messages-headline">
									<div class="input-with-icon">
											<input id="autocomplete-input" type="text" placeholder="Search">
										<i class="icon-material-outline-search"></i>
									</div>
								</div>

								<ul>
								@if(!$users->isEmpty())
                                  @foreach($users as $user)
                                  @if($user->name!=auth()->user()->name)
									<li>
										<a href="/user/message/{{$user->id}}">
											<div class="message-avatar"><i class="status-icon status-online"></i><img src="/storage/profile_image/{{$user->profile->profile_img}}" alt="" /></div>

											<div class="message-by">
												<div class="message-by-headline">
													<h5>{{$user->name}}</h5>
													<span>4 hours ago</span>
												</div>
												<p>{{$user->profile->about_me}}</p>
											</div>
										</a>
									</li>
                                    
                                    @endif
                                    @endforeach
                                    @endif

								</ul>
							</div>
							<!-- Messages / End -->

							<!-- Message Content -->
							<div class="message-content">

								<div class="messages-headline">
									<h4>{{Auth::user()->name}}</h4>
									<a href="#" class="message-action"><i class="icon-feather-trash-2"></i> Delete Conversation</a>
								</div>
								@if($messages)
                                @foreach($messages as $message)
								<!-- Message Content Inner -->
								<div class="message-content-inner">
								        @if($message->receiver_id==auth()->user()->id)
										<!-- Time Sign -->
										<div class="message-time-sign">
											<span>{{$message->created_at->diffForHumans()}}</span>
										</div>

										<div class="message-bubble me">
											<div class="message-bubble-inner">
												<div class="message-avatar"><img src="images/user-avatar-small-01.jpg" alt="" /></div>
												<div class="message-text"><p>{{$message->message}}</p></div>
											</div>
											<div class="clearfix"></div>
										</div>
										
										@elseif($message->sender_id==auth()->user()->id)
										<div class="message-time-sign">
											<span>{{$message->created_at->diffForHumans()}}</span>
										</div>
										<div class="message-bubble">
											<div class="message-bubble-inner">
												<div class="message-avatar"><img src="images/user-avatar-small-02.jpg" alt="" /></div>
												<div style="background-color: green!important; color:white;" class="message-text"><p>{{$message->message}}</p></div>
											</div>
											<div class="clearfix"></div>
										</div>
										@endif

										

										
								</div>
								@endforeach
								@endif
								<!-- Message Content Inner / End -->
								@if(session('status'))
									<small class="alert alert-success">{{session('status')}}</small>
								@endif
								<!-- Reply Area -->
								<form method="POST" action="{{route('message', $receiver->id)}}">
								    
									@csrf
									<div class="message-reply"> 
									
										<input type="hidden" id="receiver_id" name="receiver_id" value="{{ $receiver->id }}">
									
										<textarea cols="1" rows="1" name="message" placeholder="Your Message" data-autoresize></textarea>
										<button type="submit" class="button ripple-effect">Send</button>
										
									</div>
                               </form>
							</div>
							<!-- Message Content -->

						</div>
				</div>
				<!-- Messages Container / End -->
</div>

@endsection
