<div id="page-header">
    <header>
        <div class="container">
            <div class="secondary-nav">
                <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav"  aria-expanded="true" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                <div id="secondary-nav">
                    <nav>

                        <div class="left opacity-60">
                            <a href=""><i class="fa fa-phone"></i>042 111 124 124 </a>
                            <a href="mailto:info@chohanestate.com"><i class="fa fa-envelope"></i>info@chohanestate.com</a>
                        </div>
                        {{--<!--end left-->--}}
                        <div class="right">

                            <div class="element"> 
                                <!-- Authentication Links --> 
                                @guest
                                   <a href="{{ route('login') }}">Login</a> 

                                     {{--<a href="{{ route('register') }}">Register</a>--}}
                                     {{--<a href="{{ url("/addproperty") }}" >Upload Property</a>--}}
                                @else
                            </div> 



                                            <a href="/profile" >
                                                {{ Auth::user()->name }}
                                            </a>

                                                    <a href="{{ url("/myproperties") }}" >My Properties</a>
                                                    <a href="{{ url("/myarticles") }}" >My Articles</a>
                                                    <a href="{{ url("/addproperty") }}" >Upload Property</a>


                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>


                                        @endguest








                            <!--end element-->
                            {{--<div class="element">--}}
                                {{--href="#tab-sign-in"--}}
                                {{--<a href="{{ url("/login") }}">Sign In</a>--}}
                            {{--</div>--}}
                            {{--<!--end element-->--}}
                            {{--<div class="element">--}}
                                {{--<a href="#tab-register" data-toggle="modal" data-tab="true" data-target="#sign-in-register-modal">Register</a>--}}
                            {{--</div>--}}

                            {{--<div class="element">--}}
                                {{--<a href="{{ url("/addproperty") }}" >Upload Property</a>--}}
                            {{--</div>--}}
                            {{--<!--end element-->--}}

                            <!--end element-->
                        </div>

                    </nav>
                </div>
            </div>
            <!--end secondary-nav-->
        </div>
        <!--end container-->









        <hr>
        <div class="container">
            <div class="primary-nav">
                <div class="left">
                    <a href={{ url("/") }} id="brand"><img src={{asset("assets/img/logo.png")}} height="65%" width="75%" alt=""></a>
                    <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false" aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                </div>
                <!--end left-->
                <div class="right" >
                    <nav id="primary-nav">
                        <ul>
                            <li><a href={{ url("/") }}>Home</a></li>

                            <li>
                                <a href={{ url("/about-us") }} >About Us</a>
                                {{--<ul class="child-nav">--}}
                                    {{--<li><a href="listing.html">List Listing</a></li>--}}
                                    {{--<li><a href="listing-matrix.html">Matrix Listing</a></li>--}}
                                {{--</ul>--}}
                            </li>

                            <li>
                                <a href={{ url("/properties") }} >Properties</a>
                            </li>
                            <li>
                                <a href="/MarketAnalysis" class="has-child">Market Analysis</a>
                                {{--<ul class="child-nav">--}}
                                    {{--<li><a href="MarketDetails.php">Transfer Charges</a></li>--}}
                                    {{--<li><a href="MarketDetails.php">News</a></li>--}}
                                    {{--<li><a href="">Property Evaluator</a></li>--}}
                                {{--</ul>--}}


                            </li>

                            <li>
                                <a href={{ url("/plot-for-sale-in-dha-lahore") }} >DHA Plots</a>
                            </li>


                                   
                                    <li><a href={{ url("/dha-file-rates") }}>DHA Files</a></li>


                            {{--<li>--}}


                                {{--<a href="#" >DHA Plots</a>--}}

                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" >DHA Files</a>--}}

                            {{--</li>--}}
                            <li>
                                <a href={{ url("/maps") }}>Maps</a>

                            </li>

                            <li>
                                {{--<a href="#" >Transfer Charges</a>--}}

                            </li>
                            <li><a href={{ url("/contact-us")}}>Contact Us</a></li>
                            </ul>
                    </nav>
                    <!--end nav-->
                </div>
                <!--end right-->
            </div>
            <!--end primary-nav-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
</div>
<!--end page-header-->
