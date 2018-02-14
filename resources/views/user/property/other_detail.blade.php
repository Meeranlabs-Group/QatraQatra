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

                                    @if($data[0]->feature->built_in_year!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Built in Year: <strong>{{$data[0]->feature->built_in_year}}</strong></h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif


                                        @if($data[0]->feature->parking_space!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Parking Space: <strong>{{$data[0]->feature->parking_space}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->total_floor_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Total Number of Floors: <strong>{{$data[0]->feature->total_floor_building}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->number_of_elevators_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Number of Elevators in Building: <strong>{{$data[0]->feature->number_of_elevators_in_building}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->number_of_units!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Number of Available Units: <strong>{{$data[0]->feature->number_of_units}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->electricity_backup_type!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Electricity Backup: <strong>{{$data[0]->feature->electricity_backup_type}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->flooring_type!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Flooring Type: <strong>{{$data[0]->feature->flooring_type}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif




                                        @if($data[0]->feature->public_parking!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Public Parking </h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->underground_parking!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Underground Parking</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->lobby_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Lobby in Building</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->central_air_conditioning!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Central Air Conditioning</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->central_heating!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Central Heating</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->service_elevators_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Service Elevators in Building</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->waste_disposal!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Waste Disposal</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->elevator_or_lift!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Elevator or Lift</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                </div>

                    <h2>Business and Communication</h2>
                                <div class="row">

                                    @if($data[0]->feature->broadband_internet_access!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Broadband Internet Access</h5>
                                            </div>
                                        </div>
                                    @endif

                                        @if($data[0]->feature->satellite_or_cable_tv_ready!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Satellite or Cable TV Ready</h5>
                                                </div>
                                            </div>
                                        @endif



                                        @if($data[0]->feature->business_center_or_media_room_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Business Center or Media Room</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->confrence_room_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Conference Room in Building</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->intercom!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Intercom</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->atm_and_machine_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>ATM Credit Card Machines in Building</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->other_business_and_communication!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Other Business and Communication: {{$data[0]->feature->other_business_and_communication}}</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                </div>



                     <h2>Nearby Location</h2>
                                    @include('user.property.nearbylocation')


                        <h2>Other Facilities</h2>
                                <div class="row">

                                    @if($data[0]->feature->maintenance_staff!="")
                                        <div class="col-md-4 col-sm-4">
                                            <div class="feature">
                                                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Maintenance Staff</h5>
                                            </div>
                                            <!--end feature-->
                                        </div>
                                    @endif

                                        @if($data[0]->feature->security_staff!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Security Staff</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif



                                        @if($data[0]->feature->cctv_security_installed!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>CCTV Security Installed</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif

                                        @if($data[0]->feature->cafeteria_or_canteen_in_building!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Cafeteria or Canteen in Building</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->laundry_or_dry_cleaning_facilities!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Laundry or Dry Cleaning Facility</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->facilities_for_disabled!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Facilities for Disabled</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                        @if($data[0]->feature->facilities!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>Other Facilities<strong>{{$data[0]->feature->facilities}}</strong></h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif




                                        @if($data[0]->feature->pet_policy_type!="")
                                            <div class="col-md-4 col-sm-4">
                                                <div class="feature">
                                                    <h5><i class="icon_box-checked" style="color: #1fad83"></i>{{$data[0]->feature->pet_policy_type}}</h5>
                                                </div>
                                                <!--end feature-->
                                            </div>
                                        @endif


                                </div>
                            </section>

                            <section id="map">
                                <h2>Map</h2>
                              @include('user.property.map_detail')
                            </section>
                        </div>
                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="sidebar">

                                <aside class="box">
                                    <dl>

                                        <dt>Number of Elevators in Building</dt>
                                        <dd>{{$data[0]->feature->number_of_elevators_in_building}}</dd>
                                        <dt>Total Floors in Building</dt>
                                        <dd>{{$data[0]->feature->total_floor_building}}</dd>
                                        <dt>Number of Units</dt>
                                        <dd>{{$data[0]->feature->number_of_units}}</dd>
                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>
                                        <dt>Parking:</dt>
                                        <dd>{{ $data[0]->feature->parking_space }}</dd>

                                    </dl>
                                </aside>

                                <aside>

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