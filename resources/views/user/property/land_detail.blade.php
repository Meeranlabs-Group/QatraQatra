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



                            {{--<h2>Facilities</h2>--}}

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

                                    @if($data[0]->feature->disputed!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Disputed</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->feature->electricity!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity</h5>

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

                                    @if($data[0]->feature->Irrigation!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Irrigation</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->feature->Tube_Wells!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Tube Wells</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                    @if($data[0]->feature->Accessible_by_Road!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Accessible by Road</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->feature->Perimeter_Fencing!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Perimeter Fencing</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->feature->Is_Land_Fertile!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Is Land Fertile</h5>

                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                    @if($data[0]->feature->Boundary_Lines!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Boundary Lines</h5>

                                            </div>
                                        </div>
                                @endif


                                    @if($data[0]->feature->Nearby_Water_Resources!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Near by Water Resources: <strong>{{$data[0]->feature->Nearby_Water_Resources}}</strong></h5>

                                            </div>
                                        </div>
                                @endif

                                    @if($data[0]->feature->Other_Land_Features!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Land Features: <strong>{{$data[0]->feature->Other_Land_Features}}</strong></h5>

                                            </div>
                                        </div>
                                @endif



                                <!--end feature-->


                                </div>

                                <h2>Nearby Location</h2>
                                @include('user.property.nearbylocation')


                                <h2>Other Facilities</h2>
                                <div class="row">



                                    @if($data[0]->feature->security_staff!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Security Staff</h5>
                                            </div>
                                        </div>
                                        <!--end feature-->
                                    @endif


                                    @if($data[0]->feature->facilities!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Facilities: <strong>{{$data[0]->feature->facilities}}</strong></h5>
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
                                        <dd>{{$data[0]->feature->Nearby_Water_Resources}}</dd>
                                        <dt>Other Land Features</dt>
                                        <dd>{{$data[0]->feature->Other_Land_Features}}</dd>


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