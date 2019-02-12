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
				<h3>List a Property</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Listing</li>
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
							<h3><i class="icon-feather-folder-plus"></i> Listing Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<form action="{{route('create')}}" method="POST" >
                                @csrf
							    <div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Address <i class="help-icon" data-tippy-placement="right" title="please fill"></i></h5>
										<input type="text" name="name" class="with-border" placeholder="Housing Agency Ltd" required>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Rent Type <i class="help-icon" data-tippy-placement="right" title="please fill"></i></h5>
										<select class="selectpicker with-border" name="cat_name" data-size="7" title="Select Category" required type="text">
											<option value="Long-term">Long Term</option>
											<option value="Short-term">Short term</option>

										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location  <i class="help-icon" data-tippy-placement="right" title="please fill"></i></h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input id="autocomplete-input" class="with-border" type="text" placeholder="Anywhere" name="location" required>
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
                                </div>
                                    
                                <div class="col-xl-4">
									<div class="submit-field">
										<h5> baths</h5>
										<input type="number" name="bath" class="with-border" placeholder=" 10 baths" required>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>rooms</h5>
										<input type="number" name="room" class="with-border" placeholder="1 room" required>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>toilets</h5>
										<input type="number" name="toilet" class="with-border" placeholder="19 toilets" required>
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is the rent charge?</h5>
										<div class="row">
											<div class="col-xl-9">
												<div class="input-with-icon">
													<input class="with-border" type="text" name="price" placeholder="₦1,000 per month" required>
													<i class="currency">NGN</i>
												</div>
											</div>

										</div>

									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is the Duration?</h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="number" class="keyword-input with-border" name="duration" placeholder="6month-2years" required/>
												<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Description</h5>
										<textarea cols="30" rows="5" class="with-border" name="description" placeholder="4 Bedroom Bungalow House for Short Let 21 Bullshit Avenue, NomansLand Lekki Lagos" required></textarea>
                                    </div>
                                    </div>
                                </div>
                            
                                    <input type="submit" class="btn lg-btn-primary" value="submit">
                                           
                                 
                                        </form>

                                        
                  
							</div>
						</div>
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
