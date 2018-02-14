@include('include.head')
@include('partials.navbar')


<div id="page-content">
    <div class="container">
    @include('partials.bread_crum_detail')
        <!--end breadcrumb-->
        <div class="row">


            <div class="col-md-3">
                @include('partials.sidesearch')
            </div>


            <div class="col-md-9">

                <div class="quick-navigation" data-fixed-after-touch="">
                    <div class="wrapper">
                        <ul>
                            <li><a href="#description" class="scroll">Description</a></li>
                            <li><a href="#map" class="scroll">Map</a></li>
                            <li><a href="#facilities" class="scroll">Facilities</a></li>

                        </ul>
                    </div>
                </div>








                <div class="main-content">
                    @include('user.property.title&gallery')
                    <h2>Description</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <section id="description">
                                <h3>Chohan Estate Offers</h3>
                                <p>{{$data[0]->description}}
                                </p>

                            </section>
                            <section id="facilities">


                                    <h2>Main Features</h2>
<div class="row">


    @if($data[0]->feature->possesion!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Possesion</h5>
            </div>
            <!--end feature-->
        </div>
    @endif


        @if($data[0]->feature->corner!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Corner Plot</h5>
                </div>
                <!--end feature-->
            </div>
        @endif

            @if($data[0]->feature->park_facing!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Front of Park</h5>
                </div>
                <!--end feature-->
            </div>
        @endif


        @if($data[0]->feature->disputed!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Disputed</h5>
                </div>
                <!--end feature-->
            </div>
        @endif
        @if($data[0]->feature->file!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>File</h5>
                </div>
                <!--end feature-->
            </div>
        @endif


    @if($data[0]->feature->balloted!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Balloted</h5>
                </div>
                <!--end feature-->
            </div>
        @endif

        @if($data[0]->feature->sewerage!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Sewerage</h5>
                </div>
                <!--end feature-->
            </div>
        @endif
        @if($data[0]->feature->electricity!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity Available</h5>
                </div>
            <!--end feature-->
            </div>
        @endif


        @if($data[0]->feature->water_supply!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Water Supply</h5>
                </div>
                <!--end feature-->
            </div>
        @endif

        @if($data[0]->feature->sui_gas!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Sui Gas</h5>
                </div>
                <!--end feature-->
            </div>
        @endif
        @if($data[0]->feature->boundry_wall!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Boundry Wall</h5>
                </div>
                <!--end feature-->
            </div>
        @endif



        @if($data[0]->feature->other_plot_features!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Plot Features: <strong>{{$data[0]->feature->other_plot_features}}</strong></h5>
                </div>
                <!--end feature-->
            </div>
        @endif




</div>



                     <h2>Nearby Location</h2>

                                @include('user.property.nearbylocation')

                        <h2>Other Facilities</h2>
<div class="row">

                                @if($data[0]->feature->security_staff!="")
                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            <h5><i class="icon_box-checked" style="color: #1fad83"></i>Security Staff</h5>
                                        </div>
                                        <!--end feature-->
                                    </div>
                                @endif

                                @if($data[0]->feature->facilities!="")
                                    <div class="col-md-4 col-sm-4">
                                        <div class="feature">
                                            <h5><i class="icon_box-checked" style="color: #1fad83"></i>Other Facilities <strong>{{$data[0]->feature->facilities}}</strong></h5>
                                        </div>
                                        <!--end feature-->
                                    </div>
                                @endif
</div>
                            </section>
                            <section id="map">
                                <h2>Map</h2>
                                 @include('user.property.map_detail')
                                <!--end map-->
                            </section>
                        </div>
                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="sidebar">

                                <aside class="box">
                                    <dl>

                                        {{--<dt>Other Plot Features</dt>--}}
                                        {{--<dd>{{$data[0]->Other_Plot_Feature}}</dd>--}}


                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>

                                    </dl>
                                </aside>

                                <aside>
                                    {{--<h1 style="color:grey;">Contact Us</h1>--}}
                                    @include('user.property.contact_detail')
                                </aside>
                            </div>
                            <!--end sidebar-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->

                </div>


                </div>
            </div>



        </div>
    </div>


@include('partials.footer')
@include('include.foot')