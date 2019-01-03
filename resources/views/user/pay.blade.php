@extends('web.master')
@section('title','Accommodation Payment')

@section('content')

<div class = "dashboard-container">
@include('web.sidebar')
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner" >
                <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                    <h3>Pay For a Property Easily</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>						
                            <li><a href="{{url('user/dashboard')}}">Dashboard</a></li>
                        </ul>
                    </nav>
                </div>
        
                <!-- Row -->
                <div class="row">

                    <!-- Dashboard Box -->
                    <div class="col-lg-12">
                        <div class="dashboard-box margin-top-0">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2"><b>Name</b><span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="form-control" style="width:100%;" name="name of customer" class="with-border" placeholder="e.g Kalu Prosper U."> {{-- required --}}
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cemail" class="control-label col-lg-2"><b>Email</b><span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="form-control" style="width:100%;" name="email" class="with-border"> {{-- required --}}
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2"><b>Phone Number</b> <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="form-control" style="width:100%;" name="phone" class="with-border">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2"><b>Property Type </b> <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="form-control" style="width:100%;" name="property" class="with-border" placeholder="e.g 3 Bedroom Flat, Selfcon, Single Room">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2"><b>Duration </b> <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="form-control" style="width:100%;" name="duration" class="with-border" placeholder="e.g  3 months">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-2"><b>Amount</b> <span class="required">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="form-control" style="width:70%;" name="amount" class="with-border"> {{-- required in kobo --}}
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                    <!-- {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}} -->

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                                    <p class="form-group">
                                    <div class="col-lg-8">
                                        <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </div>
                                    </p>
                                </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection  