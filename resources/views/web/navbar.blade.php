

  <!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

<!-- Header -->
<div id="header">
    <div class="container">
        
        <!-- Left Side Content -->
        <div class="left-side">
        
            <!-- Logo -->
            <div id="logo">
                <a href="#"> <img src="{{asset('img/logo1.png')}}" id="fast"  alt="Fasthousing Logo"></a>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation">
               @if(Auth::user()->role == 'FastRep' && Auth::user()->isAdmin == 0)
                <ul class="navbar-nav" id="responsive">

                    <li><a href="/welcome">Home</a></li>
                       
                   
                    
                    
                    <li><a href="user/post">List a Property</a></li>

                    <li><a href="#">Check Listing Status</a>
                       
                    </li>

                    <li class="nav-item">
                    <a class="nav-link">Support</a>
                    </li>
                    
                    <li><a href="#"><i class="icon-material-outline-assignment"></i> {{Auth::User()->name}}</a>
								<ul>
									
									<li><a href="/user/post">My Profile</a></li>
									@if(Auth::user()->profile == true)
						<li><a href="/user/settings/{{Auth::user()->id}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
						  @else
						  <li><a href="/user/profile"><i class="icon-material-outline-settings"></i> Settings</a></li>
						  @endif
						  </li>
									<li>@guest
						   <li class="nav-item">
							   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						   </li>
						   
						   @if (Route::has('register'))
							   <li class="nav-item">
								   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							   </li>
						   @endif
					   @else
						   
					   @endguest
				   

							<li>
							<a href="{{ route('logout') }}"
									  onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									    <i class="icon-material-outline-power-settings-new"></i>Logout
								   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                                   </li>
                                    
								</ul>	
							</li>

                
                </ul>
                @elseif(Auth::user()->role == 'Customer' && Auth::user()->isAdmin == 0)

                <ul class="navbar-nav" id="responsive">

                    <li><a href="/welcome">Home</a></li>
                    


                    <li><a href="#">Check Transaction Status</a></li>

                     <li><a href="/user/bookmark"><i class="icon-material-outline-star-border"></i> Notification</a></li>
                    
                    

                    <li class="nav-item">
                    <a href="user/chat" class="nav-link">Support</a>
                    </li>

                    <li><a href="#"><i class="icon-material-outline-assignment"></i> {{Auth::User()->name}}</a>
                                <ul>
                                    
                                    <li><a href="/user/post">My Profile</a></li>
                                    @if(Auth::user()->profile == true)
                        <li><a href="/user/settings/{{Auth::user()->id}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        @else
                        <li><a href="/user/profile"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        @endif
                        </li>
                                    <li>@guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        
                    @endguest


                            <li>
                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="icon-material-outline-power-settings-new"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                                </li>
                                    
                                </ul>	
                            </li>


                </ul>

                @else

                <ul class="navbar-nav" id="responsive">

                    <li><a href="/welcome">Home</a></li>
                    



                    <li><a href="freelancers-grid-layout-full-page.html">FastRep Listings</a></li>

                    

                    <li><a href="#"><i class="icon-material-outline-assignment"></i> {{Auth::User()->name}}</a>
                                <ul>
                                    
                                    <li><a href="/user/post">My Profile</a></li>
                                    @if(Auth::user()->profile == true)
                        <li><a href="/user/settings/{{Auth::user()->id}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        @else
                        <li><a href="/user/profile"><i class="icon-material-outline-settings"></i> Settings</a></li>
                        @endif
                        </li>
                                    <li>@guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        
                    @endguest


                            <li>
                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="icon-material-outline-power-settings-new"></i>Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                                </li>
                                    
                                </ul>	
                            </li>


                </ul>
              
              @endif

            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
            
        </div>
        <!-- Left Side Content / End -->


    </div>
</div>
<!-- Header / End -->

</header>



