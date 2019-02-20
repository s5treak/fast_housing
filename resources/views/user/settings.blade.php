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
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
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
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">
                            <form action="/user/settings/{id}" method="POST" enctype="multipart/form-data">
							  @csrf
							  
								<div class="row">
								

									<div class="col-auto">
										<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										
											@if(count($errors) > 0)
													
											<small class="alert btn-danger">{{$errors->first('profile_img')}}</small>
											

											@endif
										
											<img class="profile-pic" src="/storage/profile_image/{{$profiles->profile_img}}" name="profile_img" alt="" />
											<div class="upload-button"></div>
											<input class="file-upload" type="file" name="profile_img" accept="image/*"/>
										</div>
								</div>


									<div class="col">
									  <input type="hidden" class="with-border" value="{{Auth::user()->id}}" name="user_id">
										<div class="row">
										
										

											<div class="col-xl-6">
												<div class="submit-field">
													<h5>First Name</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('first_name')}}</small>
													

													@endif
												
													<input type="text" class="with-border" value="{{$profiles->first_name}}" name="first_name">
												</div>
										</div>

											<div class="col-xl-6">
												<div class="submit-field">
													<h5>Last Name</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('last_name')}}</small>
													

													@endif
												
													<input type="text" class="with-border" value="{{$profiles->last_name}}" name="last_name">
												</div>
											</div>

											

											<div class="col-xl-6">
												<div class="submit-field">
													<h5>Email</h5>
													@if(count($errors) > 0)
												
														<p class="alert btn-danger">{{$errors->first('email')}}</p>
													

													@endif
													
													<input type="text" class="with-border" value="{{$profiles->email}}" name="email">
												</div>
											</div>
											<div class="col-xl-6">
											
												<div class="submit-field">
													<h5>Phone Number</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('phone_no')}}</small>
													

													@endif
												
													<input type="text" class="with-border" value="{{$profiles->phone_no}}" placeholder="Phone Number" name="phone_no">
												</div>
											</div>

											<div class="col-xl-6">
										
												<div class="submit-field">
													<h5>Date of Birth</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('dob')}}</small>
													

													@endif
												
													<input type="date" name="dob" value="{{$profiles->dob}}" class="with-border">
												</div>
										</div>

										<div class="col-xl-6">
												<div class="submit-field">
													<h5>Address</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('address')}}</small>
													

													@endif
													<input type="text" class="with-border" value="{{$profiles->address}}" placeholder="Address" name="address">
												</div>
											</div>

											<div class="col-xl-6">
												<!-- Account Type -->
												<div class="submit-field">
													<h5>Account Type</h5>
													<div class="account-type">
														<div>
															<input type="radio" name="role" value="FastRep" id="freelancer-radio" class="account-type-radio" checked/>
															<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i>FastRep</label>
															@if($role=='FastRep')
															<small>This was your original role</small>
															<style>
															.account-type input.account-type-radio:checked ~ label {
															color: #fff;
															background-color: #47bb67;
															}
															</style>
															@endif
														</div>
														

														<div>
															<input type="radio" name="role" value="Customer"  id="employer-radio" class="account-type-radio"/>
															<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i>Customer</label>
															@if($role=='Customer')
															<small>This was your original role</small>
															<style>
															.account-type input.account-type-radio:checked ~ label {
															color: #fff;
															background-color: #47bb67;
															}
															</style>
															@endif
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-12">
												<div class="submit-field">
													<h5>Introduce Yourself</h5>
													@if(count($errors) > 0)
												
														<small class="alert btn-danger">{{$errors->first('about_me')}}</small>
													

													@endif
													
													
													<textarea cols="30" rows="5" name="about_me" class="with-border">{{$profiles->about_me}}</textarea>
												</div>
											</div>

											<div class="col-xl-6">
										
												<div class="submit-field">
												
												<button><a class="btn btn-lg btn-primary" type="submit">Save Changes</a></button>
												
												
												</div>
											</div>

										</div>
									</div>
								</div>
							</form>	

						</div>
					</div>
				</div>

				
				<div class="col-xl-12">
					<div id="test1" class="dashboard-box">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
						</div>

						<div class="content with-padding">
							<div class="row">
								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Current Password</h5>
										<input type="password" value="{{$users->password}}" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Repeat New Password</h5>
										<input type="password" class="with-border">
									</div>
								</div>

								<div class="col-xl-12">
									<div class="checkbox">
										<input type="checkbox" id="two-step" checked>
										<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Button -->
				<div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
				</div>

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