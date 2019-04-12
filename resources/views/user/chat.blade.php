
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
								<!-- <div class="messages-headline">
									<div class="input-with-icon">
											<input id="autocomplete-input" type="text" placeholder="Search">
										<i class="icon-material-outline-search"></i>
									</div>
								</div> -->

								<ul>
                                  @if(!$users->isEmpty())
                                  @foreach($users as $user)
                                  @if($user->isAdmin == 1)
									<li>
										<a href="/user/message/{{$user->id}}">
											<div class="message-avatar"><i class="status-icon status-online"></i>
											  @if($user->profile)
											  <img src="/storage/profile_image/{{$user->profile->profile_img}}" alt=""/>
											  @else
											  <img src="{{asset('images/user-avatar-placeholder.png')}}">
											  @endif
											</div>

											<div class="message-by">
												<div class="message-by-headline">
													<h5>{{$user->name}}</h5>
													<span>4 hours ago</span>
												</div>
												@if($user->profile)
												<p>{{$user->profile->about_me}}</p>
												@else
												<p>coming soon</p>
												@endif
											</div>
										</a>
									</li>
                                    
                                    @endif
                                    @endforeach
                                    @endif
								

								

								</ul>
							</div>
							<!-- Messages / End -->

							

						</div>
				</div>
				<!-- Messages Container / End -->
</div>

@endsection
