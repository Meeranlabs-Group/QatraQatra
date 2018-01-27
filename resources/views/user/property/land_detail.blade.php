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
                    <div class="title">
                        <div class="left">
                            <h1>{{ucfirst($data[0]->title)}}</h1>
                            <h3><a href="#">{{$data[0]->block_name}}</a> - <a href="#">{{$data[0]->phase_name}}</a> - <a href="#">{{$data[0]->society_name}}</a> - <a href="#">{{$data[0]->city_name}}</a>(63 properties)</h3>
                        </div>

                        <div class="right">
                            <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a>
               	 @include('user.property.phone_detail')
                        </div>
                    </div>
                    <!--end title-->
                    <section id="gallery">
                        <div class="gallery-detail">
                            <div class="ribbon"><div class="offer-number">{{$data[0]->purpose}}</div></div>

                            <div class="one-item-carousel">

                                @foreach($photos as $photo)
                                    <div class="image">

                                        <img src="{{ asset($photo->path)  }}" alt="">
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </section>



                    <h2>Description</h2>




                    <div class="row">
                        <div class="col-md-8">
                            <section id="description">
                                <h3>Chohan Estate Offers</h3>
                                <p>{{$data[0]->description}}
                                </p>

                            </section>



                            {{--<h2>Facilities</h2>--}}

                            <section id="facilities">

                                <h2>Main Features</h2>
                                <div class="row">
                                    @if($data[0]->possesion!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Possesion</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->disputed!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Disputed</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->electricity!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->sui_gas!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Sui Gas</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->Irrigation!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Irrigation</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->Tube_Wells!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Tube Wells</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->Accessible_by_Road!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Accessible by Road</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->Perimeter_Fencing!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Perimeter Fencing</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->Is_Land_Fertile!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Is Land Fertile</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->Boundary_Lines!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Boundary Lines</h5>

                                            </div>
                                        </div>
                                @endif


                                    @if($data[0]->Nearby_Water_Resources!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Near by Water Resources: <strong>{{$data[0]->Nearby_Water_Resources}}</strong></h5>

                                            </div>
                                        </div>
                                @endif

                                    @if($data[0]->Other_Land_Features!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Land Features: <strong>{{$data[0]->Other_Land_Features}}</strong></h5>

                                            </div>
                                        </div>
                                @endif



                                <!--end feature-->


                                </div>

                                <h2>Nearby Location</h2>
                                <div class="row">

                                    @if($data[0]->nearby_schools!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Schools</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->nearby_hospitals!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Hospitals</h5>
                                            </div>
                                        </div>
                                        <!--end feature-->
                                    @endif


                                    @if($data[0]->nearby_shopping_malls!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Shopping Malls</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->nearby_restaurants!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Restaurants</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->nearby_public_transport!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Nearby Public Transport Service</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->distance_from_airport_kms!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">


                                                {{--<li>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></li>--}}

                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Distance From Airport {{$data[0]->distance_from_airport_kms}}</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                </div>


                                <h2>Other Facilities</h2>
                                <div class="row">



                                    @if($data[0]->security_staff!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Security Staff</h5>
                                            </div>
                                        </div>
                                        <!--end feature-->
                                    @endif


                                    @if($data[0]->facilities!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Facilities: <strong>{{$data[0]->facilities}}</strong></h5>
                                            </div>
                                        </div>
                                @endif
                                <!--end feature-->


                                </div>

                            </section>


                            <section id="map">
                                <h2>Map</h2>



                                <div class="map height-300 box">
                                    @include('user.property.map_detail')
                                </div>

                                <!--end map-->
                            </section>
                        </div>

                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="sidebar">

                                <aside class="box">
                                    <dl>
                                        <dt>Nearby Water Resources:</dt>
                                        <dd>{{$data[0]->Nearby_Water_Resources}}</dd>
                                        <dt>Other Land Features</dt>
                                        <dd>{{$data[0]->Other_Land_Features}}</dd>


                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>

                                    </dl>
                                </aside>

                                <aside>
                                    <h1 style="color:grey;">Contact Us</h1>
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