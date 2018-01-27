@include('include.head')
@include('partials.navbar')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">About Us</li>
        </ol>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="box filter">
                        <h2>About Us</h2>
                        <ul class="links">
                            <li class="active"><a href={{ url("/about-us")}}>About Us</a></li>
                            <li><a href={{ url("/Ceo-Message")}}>CEO Message</a></li>
                            <li><a href={{ url("/contact-us")}}>Contact Us</a></li>
                        </ul>
                    </div>


                    <a href="#" class="advertising-banner">
                        <span class="banner-badge">Advertising</span>
                        <img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">
                    </a>


                    <!--end filter-->
                </div>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <div class="main-content">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <!--end title-->
                    <section>
                        <h2>Who We Are..</h2>
                        <p>Chohan Estate was established in 1985.This company was formed keeping in mind the
                            growing desires of the people and the demand to owe own house.
                            No one better than us could have capture the dreams and requirements of the people of Pakistan.
                        </p>
                        <p>
                            At Chohan we are committed to developing projects modified to the needs of the market and the
                            expectations of our clients and partners, whilst at the same time enriching these projects with our vision, aims, and values.
                        </p>

                        <p>
                            In conclusion, Please allow our extensive knowledge of real estate and our experienced staff to assist you with whatever your needs may be.
                            From rentals to property management, we are fully equipped to handle all of your real estate needs.
                        </p>
                    </section>





                    <section>
                        <h2>Our Management Team</h2>
                        <div class="row">


                            @foreach($agents as $agent)
                            <div class="col-md-6">
                                <div class="member">
                                    <div class="image"><img src="{{ $agent->path }}" alt="{{$agent->name}}"></div>
                                    <div class="description">
                                        <h3>{{ $agent->name }}</h3>
                                        <h4>{{ $agent->designation }}</h4>
                                        <div class="info">
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>{{ $agent->phone_number }}</dd>
                                                <dt>Mobile Phone:</dt>
                                                <dd>{{ $agent->mobile_number }}</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:{{$agent->email}}">{{ $agent->email }}</a></dd>
                                               
                                            </dl>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>
                                <!--member-->
                            </div>
                            @endforeach
                        </div>
                        <!--end row-->
                    </section>
                </div>
                <!--end main-content-->
            </div>




        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer');
@include('include.foot');