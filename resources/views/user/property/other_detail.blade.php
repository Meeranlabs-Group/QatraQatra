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
                             @if( $data[0]->purpose=="Rent" )
				@if( $data[0]->property_type == "Houses" || $data[0]->property_type == "Flates" || $data[0]->property_type == "Upper-Portions" || $data[0]->property_type == "Lower-Portions" || $data[0]->property_type == "Farms-House" || $data[0]->property_type == "Rooms" )

							  <a href="tel:0302-8444701" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif


			 @if( $data[0]->purpose=="Rent" )
				@if( $data[0]->property_type == "Residential-Plots" || $data[0]->property_type == "Commerical-Plots" ||$data[0]->property_type == "Agricultural-Land" || $data[0]->property_type == "Industrial-Land" || $data[0]->property_type == "Offices" || $data[0]->property_type == "Shops" || $data[0]->property_type == "Warehouses" || $data[0]->property_type == "Factories" ||  $data[0]->property_type == "Buildings" || $data[0]->property_type == "Other" )

							  <a href="tel:0302-8444701" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif

		 @if( $data[0]->purpose=="Sale" )
				@if( $data[0]->property_type == "Commerical-Plots" || $data[0]->property_type == "Agricultural-Land" || $data[0]->property_type == "Industrial-Land" || $data[0]->property_type == "Offices" || $data[0]->property_type == "Shops" || $data[0]->property_type == "Warehouses" || $data[0]->property_type == "Factories" || $data[0]->property_type == "Buildings" || $data[0]->property_type == "Other" )

							  <a href="tel:0302-8444706" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif



		 @if( $data[0]->purpose=="Sale" )
				@if( $data[0]->property_type == "Residential-Plots" || $data[0]->property_type == "Plot-Files" ||$data[0]->property_type == "Plot-Forms" )

							  <a href="tel:0302-8444781" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif



 @if( $data[0]->purpose=="Sale" )
            @if( $data[0]->property_type == "Houses" ||$data[0]->property_type == "Flates" || $data[0]->property_type == "Upper-Portions" || $data[0]->property_type == "Lower-Portions" || $data[0]->property_type == "Farms-House" || $data->property_type == "Rooms" )

							  <a href="tel:0302-8444703" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
		@endif

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
                            <section id="facilities">
                                <h2>Facilities</h2>
                                <ul >

                                    <h3>Main Features</h3>

                                    @if($data[0]->built_in_year!="")
                                        <li>Built in Year  <strong>{{$data[0]->built_in_year}}</strong></li>
                                    @endif

                                    @if($data[0]->total_floor_building!="")

                                        <li>Total Number of Floors  <strong>{{$data[0]->total_floor_building}}</strong></li>
                                    @endif


                                    @if($data[0]->number_of_elevators_in_building!="")

                                        <li>Number of Elevators in Building<strong>{{$data[0]->number_of_elevators_in_building}}</strong></li>
                                    @endif

                                    @if($data[0]->electricity_backup_type!="")
                                        <li>Electricity Backup Type <strong>{{$data[0]->electricity_backup_type}}</strong></li>
                                    @endif

                                    @if($data[0]->	flooring_type!="")
                                        <li>Flooring Type <strong>{{$data[0]->flooring_type}}</strong></li>
                                    @endif




                                    @if($data[0]->Public_Parking!="")
                                        <label><input type="checkbox" checked disabled >Public Parking</label>
                                    @endif
                                    @if($data[0]->Underground_Parking!="")
                                        <label><input type="checkbox" checked disabled >Underground Parking</label>
                                    @endif

                                    @if($data[0]->Lobby_in_Building!="")
                                        <label><input type="checkbox" checked disabled >Lobby in Building</label>
                                    @endif


                                    @if($data[0]->central_air_conditioning!="")
                                        <label><input type="checkbox" checked disabled >Central Air Conditioning</label>
                                    @endif


                                    @if($data[0]->central_heating!="")
                                        <label><input type="checkbox" checked disabled>Central Heating</label>
                                    @endif

                                    @if($data[0]->Service_Elevators_in_Building!="")
                                        <label><input type="checkbox" checked disabled>Service Elevators in Building</label>
                                    @endif


                                    @if($data[0]->waste_disposal!="")
                                        <label><input type="checkbox" checked disabled >Waste Disposal</label>
                                    @endif

                                    @if($data[0]->Elevator_or_Lift!="")
                                        <label><input type="checkbox" checked disabled >Elevator_or_Lift</label>
                                    @endif

                    <h3>Business and Communication</h3>

                                    @if($data[0]->broadband_internet_access!="")
                                        <label><input type="checkbox" checked disabled >Broadband Internet Access</label>
                                    @endif
                                    @if($data[0]->satellite_or_cable_tv_ready!="")
                                        <label><input type="checkbox" checked disabled >Satellite or Cable TV Ready</label>
                                    @endif

                                    @if($data[0]->business_center_or_media_room_building!="")
                                        <label><input type="checkbox" checked disabled >Business Center or Media Room</label>
                                    @endif

                                    @if($data[0]->confrence_room_in_building!="")
                                        <label><input type="checkbox" checked disabled >Conference Room in Building</label>
                                    @endif


                                    @if($data[0]->intercom!="")
                                        <label><input type="checkbox" checked disabled >Intercom</label>
                                    @endif


                                    @if($data[0]->atm_and_machine_in_building!="")
                                        <label><input type="checkbox" checked disabled >ATM Credit Card Machines in Building</label>
                                    @endif

                                    @if($data[0]->other_business_and_communication!="")
                                        <li>Other Business and Communication<strong>{{$data[0]->other_business_and_communication}}</strong></li>
                                    @endif



                     <h3>Nearby Location</h3>
                                @if($data[0]->nearby_schools!="")
                                        <label><input type="checkbox" checked disabled >Nearby Schools</label>
                                    @endif

                                @if($data[0]->nearby_hospitals!="")
                                        <label><input type="checkbox" checked disabled >Nearby Hospitals</label>
                                    @endif

                                @if($data[0]->nearby_shopping_malls!="")
                                        <label><input type="checkbox" checked disabled >Nearby Shopping Malls</label>
                                    @endif

                                @if($data[0]->nearby_restaurants!="")
                                        <label><input type="checkbox" checked disabled >Nearby Restaurants</label>
                                    @endif
                                @if($data[0]->nearby_public_transport!="")
                                        <label><input type="checkbox" checked disabled >Nearby Public Transport Service</label>
                                    @endif

                                    @if($data[0]->distance_from_airport_kms!="")
                                        <li>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></li>
                                    @endif




                        <h3>Other Facilities</h3>

                                    @if($data[0]->maintenance_staff!="")
                                        <label><input type="checkbox" checked disabled >Maintenance Staff</label>
                                    @endif
                                    @if($data[0]->security_staff!="")
                                        <label><input type="checkbox" checked disabled >Security Staff</label>
                                    @endif

                                    @if($data[0]->CCTV_Security_Installed!="")
                                        <label><input type="checkbox" checked disabled >CCTV Security Installed</label>
                                    @endif

                                    @if($data[0]->Cafeteria_or_Canteen_in_Building!="")
                                        <label><input type="checkbox" checked disabled >Cafeteria or Canteen in Building</label>
                                    @endif

                                    @if($data[0]->laundry_or_dry_cleaning_facilities!="")
                                        <label><input type="checkbox" checked disabled >Laundry or Dry Cleaning Facility</label>
                                    @endif

                                    @if($data[0]->facilities_for_disabled!="")
                                        <label><input type="checkbox" checked disabled >Facilities for Disabled</label>
                                    @endif


                                    @if($data[0]->other_facilities!="")
                                        <li>Other Facilities<strong>{{$data[0]->other_facilities}}</strong></li>
                                    @endif
                                    @if($data[0]->pet_policies!="")
                                        <li>Pet Policies <strong>{{$data[0]->pet_policies}}</strong></li>
                                    @endif







                                </ul>
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
                                        <dd>{{$data[0]->number_of_elevators_in_building}}</dd>
                                        <dt>Total Floors in Building</dt>
                                        <dd>{{$data[0]->total_floor_building}}</dd>
                                        <dt>Number of Units</dt>
                                        <dd>{{$data[0]->number_of_units}}</dd>
                                        <dt>Area:</dt>
                                        <dd>{{ $data[0]->unit_size }}-{{ $data[0]->unit_type }}</dd>
                                        <dt>Parking:</dt>
                                        <dd>{{ $data[0]->parking_space }}</dd>

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