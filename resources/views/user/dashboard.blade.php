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
                    <h3>Howdy, {{Auth::user()->name}}!</h3>
                    <span>We are glad to see you again!</span>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Fun Facts Container -->
                @if(Auth::user()->role == 'FastRep' && Auth::user()->isAdmin == 0)

                <div class="fun-facts-container">
                    <div class="fun-fact" data-fun-fact-color="#36bd78">
                        <div class="fun-fact-text">
                            <span>Listed Properties</span>
                            <h4>22</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                    </div>
                    
                    <div class="fun-fact" data-fun-fact-color="#efa80f">
                        <div class="fun-fact-text">
                            <span>Approved Listings</span>
                            <h4>28</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                    </div>

                    <div class="fun-fact" data-fun-fact-color="#b81b7f">
                        <div class="fun-fact-text">
                            <span>Properties Rented</span>
                            <h4>4</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                    </div>
                    
                    
                    <!-- Last one has to be hidden below 1600px, sorry :( -->
                    <!-- <div class="fun-fact" data-fun-fact-color="#2a41e6">
                        <div class="fun-fact-text">
                            <span>This Month Views</span>
                            <h4>987</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                    </div> -->
                </div>


                @elseif(Auth::user()->role == 'Customer' && Auth::user()->isAdmin == 0)

                    <div class="fun-facts-container">
                    <!-- <div class="fun-fact" data-fun-fact-color="#36bd78">
                        <div class="fun-fact-text">
                            <span>Listed Properties</span>
                            <h4>22</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                    </div> -->
                    
                    <div class="fun-fact" data-fun-fact-color="#efa80f">
                        <div class="fun-fact-text">
                            <span>Properties Rented</span>
                            <h4>28</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                    </div>

                    <div class="fun-fact" data-fun-fact-color="#b81b7f">
                        <div class="fun-fact-text">
                            <span>My Payments</span>
                            <h4>4</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                    </div>
                    
                    
                    <!-- Last one has to be hidden below 1600px, sorry :( -->
                    <!-- <div class="fun-fact" data-fun-fact-color="#2a41e6">
                        <div class="fun-fact-text">
                            <span>This Month Views</span>
                            <h4>987</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                    </div> -->
                </div>
                
                @else

                <div class="fun-facts-container">
                    <div class="fun-fact" data-fun-fact-color="#36bd78">
                        <div class="fun-fact-text">
                            <span>Users</span>
                            <h4>22</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
                    </div>

                    <div class="fun-fact" data-fun-fact-color="#b81b7f">
                        <div class="fun-fact-text">
                            <span>FastRep Listings</span>
                            <h4>4</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
                    </div>
                    
                    <div class="fun-fact" data-fun-fact-color="#efa80f">
                        <div class="fun-fact-text">
                            <span>Approved Listings</span>
                            <h4>28</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-material-outline-rate-review"></i></div>
                    </div>

                    
                    
                    
                    <!-- Last one has to be hidden below 1600px, sorry :( -->
                    <!-- <div class="fun-fact" data-fun-fact-color="#2a41e6">
                        <div class="fun-fact-text">
                            <span>This Month Views</span>
                            <h4>987</h4>
                        </div>
                        <div class="fun-fact-icon"><i class="icon-feather-trending-up"></i></div>
                    </div> -->
                </div>
                
                
                @endif
            
                
                
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




@endsection