@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li><a href="{{ url("/about-us")}}">About Us</a></li>
            <li class="active">Contact Us</li>
        </ol>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="box filter">
                        <h2>About Us</h2>
                        <ul class="links">
                            <li><a href={{ url("/about-us")}}>About Us</a></li>
                            {{--<li><a href="become-an-affiliate.html">Become an Affiliate</a></li>--}}
                            {{--<li><a href="terms-and-conditions.html">Terms & Conditions</a></li>--}}
                            <li class="active"><a href={{ url("/contact-us")}}>Contact Us</a></li>
                        </ul>
                    </div>
                    <!--end filter-->
                </div>
                <!--end sidebar-->

                <a href="#" class="advertising-banner">
                    <span class="banner-badge">Advertising</span>
                    <img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">
                </a>

            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
                <div class="main-content">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                    <!--end title-->
                    <section>
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Address</h2>
                                <address>
                                    <strong>Head Office</strong><br>
                                    G -16, Phase 1, Masjid Chowk,<br>
                                    Defence Housing Authority Lahore Cantt., Pakistan.<br>
                                    <br>
                                    <strong>UAN:</strong> +92-42-111-124-124<br>
                                    <strong>Mobile:</strong> 0321 9124124<br>
                                    <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
                                    <strong>Fax:</strong> +92-42-35729990<br>
                                    <a href="#">info@chohanestate.com</a><br>

                                </address>
                                <h2>Social Profiles</h2>
                                <div class="social-icons">
                                    <a href="https://www.facebook.com/ChohanEstatePk/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/ChohanEstatePk/" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/ChohanEstatePk/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UC2J5qDSBD2r1OfCtxwvTKaw" target="_blank"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--end col-md-8-->
                            <div class="col-md-8">
                                <h2>Map</h2>
                                {{--<div id="contact-map" class="map">--}}

                                    <div class="form-group">
                                        <label>Place on Map</label>
                                        <div class="map height-300 box" id="map-item"></div>
                                    </div>

                                {{--</div>--}}
                                <!--end contact-map-->
                            </div>
                            <!--end col-md-8-->
                        </div>
                        <!--end row-->
                    </section>
                    <section>
                        <form class="labels-uppercase clearfix">
                            <h2>Contact Form</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Your Name<em>*</em></label>
                                        <input type="text" class="form-control" id="form-contact-name" name="location" placeholder="Name" required="">
                                    </div>
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Your Email<em>*</em></label>
                                        <input type="email" class="form-control" id="form-contact-email" name="location" placeholder="Email" required="">
                                    </div>
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="form-contact-message">Your Message<em>*</em></label>
                                <input class="form-control "  id="form-contact-message"   name="form-contact-message" required="" placeholder="Message"></input>
                            </div>
                            <!--end form-group-->
                            <div id="form-status" class="pull-left"></div>
                            <div class="form-group pull-right">
                                <button type="submit" class="btn btn-primary btn-rounded">Send Message</button>
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--end form-->
                    </section>
                </div>
                <!--end main-content-->
            </div>
            <!--end col-md-9-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>



@include('partials.footer')
@include('include.foot')