
@extends('web.master')

@section('content')


<!-- Dashboard Container -->
<div class="dashboard-container">

   
   @include('web.sidebar')
	

	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>My Profile</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>My Profile</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
              
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
                        <h3><i class="icon-material-outline-face"></i> My Profile</h3>
						</div>
                        

                        @if(count($profiles) > 0)
                        @foreach($profiles as $profile)
                        
						<div class="content with-padding padding-bottom-0">
                            
                            
                               

                                <div class="row">
                                    
                                    <div class="col-auto">
                                        <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                           
                                    
                                        <img src="/storage/profile_image/{{$profile->profile_img}}" alt="" />
                                            
                                            
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row">
                                           
                                              
                                                
                                            

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>First Name</h5>
                                                    
                                                 
                                                    <p class="with-border">{{$profile->first_name}}</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Last Name</h5>
                                                   
                                                   
                                                    <p class="with-border">{{$profile->last_name}}</p>
                                                </div>
                                            </div>


                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Email</h5>
                                                   
                                                    
                                                    <p class="with-border">{{$profile->email}}</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <!-- Account Type -->
                                                <div class="submit-field">
                                                    <h5>Phone Number</h5>
                                                    
                                                
                                                    <p class="with-border">{{$profile->phone_no}}</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <!-- Account Type -->
                                                <div class="submit-field">
                                                    <h5>Date of Birth</h5>
                                                    
                                                   
                                                    <p class="with-border">{{$profile->dob}}</p>
                                                </div>
                                            </div>

                                    

                                            <div class="col-xl-6">
                                                <!-- Account Type -->
                                                <div class="submit-field">
                                                    <h5>Address</h5>
                                                    
                                                    <p class="with-border">{{$profile->address}}</p>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5>About Me</h5>
                                                    
                                                    
                                                    <p class="with-border">{{$profile->about_me}}</p>
                                                </div>
                                        </div>

                                            <div class="col-xl-6">
                                                <!-- Account Type -->
                                                <div class="submit-field">
                                                
                                                 <a class="btn btn-lg btn-primary" href="/user/settings">Edit Profile</a>
                                                
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                               
                            

						</div>
                        @endforeach
                        @endif
                      
					</div>
				</div>

				<!-- Dashboard Box -->
				

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->
</div>




@endsection