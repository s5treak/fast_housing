

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
                <a href="#"><img src="{{asset('img/fast%20housing%20png1.png')}}" id="fast"  alt="Fasthousing Logo"></a>
            </div>

            <!-- Main Navigation -->
            <nav id="navigation">
                <ul id="responsive">

                    <li><a href="dashboard">Home</a>
                    </li>

            

                    <li>
                    
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                           <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">{{ __('Logout') }}
                           </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                        </div>
                            

                    </li>

                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
            
        </div>
        <!-- Left Side Content / End -->


    </div>
</div>
<!-- Header / End -->

</header>


