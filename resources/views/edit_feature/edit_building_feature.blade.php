@extends('edit_feature.mainview')
@section('body')

    <section id="features">
        <div class="title">
            <h2>Features</h2>
            <aside class="step">4</aside>
        </div>
        <div class="row">

            <div class="col-md-12">
                <h3>Main Features</h3>
                <ul class="checkboxes inline half list-unstyled">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Built in Year</label>
                                <select  name="Built_in_Year" class="framed width-80">

                                    <option value="{{ $feature[0]->feature->built_in_year }}">{{ $feature[0]->feature->built_in_year }}</option>
                                    <option value="" disabled>Select</option>

                                    <?php
                                    for($i = 1990 ; $i <= date('Y'); $i++){
                                        echo "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>

                                </select>


                            </div>
                        </div>


                        {{--<li><label><input type="text" name="Built_in_Year">Built in Year</label></li>--}}


                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Parking Spaces</label>
                                <select  name="Parking_Spaces" class="framed width-80">
                                    <option value="{{ $feature[0]->feature->parking_space }}">{{ $feature[0]->feature->parking_space }}</option>
                                    <option value="" disabled>Select</option>

                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5></option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Flooring</label>
                                <select  name="Flooring_type" class="framed width-80">
                                    <option value="{{ $feature[0]->feature->flooring_type }}">{{ $feature[0]->feature->flooring_type}}</option>
                                    <option value="" disabled>Select</option>

                                    <option value="None">None</option>
                                    <option value="Tiles">Tiles</option>
                                    <option value="Marble">Marble</option>
                                    <option value="Wooden">Wooden</option>
                                    <option value="Chip">Chip</option>
                                    <option value="Cement">Cement</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Electricity Backup</label>
                                <select name="Electricity_Backup_type" class="framed width-80">
                                    <option value="{{ $feature[0]->feature->electricity_backup_type }}">{{ $feature[0]->feature->electricity_backup_type}}</option>
                                    <option value="" disabled>Select</option>
                                    <option value="None">None</option>
                                    <option value="Generator">Generator</option>
                                    <option value="Ups">Ups</option>
                                    <option value="Solar">Solar</option>
                                    <option value="Other">Other</option>
                                </select>



                            </div>
                        </div>



                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Total Floors in Building</label>
                                {{--<div class="input-number">--}}
                                {{--<div class="change-button plus">--}}
                                {{--<i class="fa fa-caret-up"></i>--}}
                                {{--</div>--}}
                                {{--<div class="change-button minus">--}}
                                {{--<i class="fa fa-caret-down"></i>--}}
                                {{--</div>--}}

                                <input type="number"  name="Total_Floors_in_Building" value="{{ $feature[0]->feature->total_floor_building }}">
                                {{--</div>--}}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group width-80">
                                <label>Number of Elevators in Building</label>
                                {{--<div class="input-number">--}}
                                {{--<div class="change-button plus">--}}
                                {{--<i class="fa fa-caret-up"></i>--}}
                                {{--</div>--}}
                                {{--<div class="change-button minus">--}}
                                {{--<i class="fa fa-caret-down"></i>--}}
                                {{--</div>--}}

                                <input type="number"  name="Number_of_Elevators_in_Building" value="{{ $feature[0]->feature->number_of_elevators_in_building }}">

                                {{--</div>--}}


                            </div>
                        </div>




                        <div class="clearfix"></div>

                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">

                        </div>



                        <ul>


                            @if($feature[0]->feature->public_parking)
                                <li><label><input type="checkbox" checked name="Public_Parking">Public Parking</label></li>
                            @else
                                <li><label><input type="checkbox" name="Public_Parking">Public Parking</label></li>
                            @endif

                            @if($feature[0]->feature->underground_parking)
                                <li><label><input type="checkbox" checked name="Underground_Parking">Underground Parking</label></li>
                            @else
                                <li><label><input type="checkbox" name="Underground_Parking">Underground Parking</label></li>
                            @endif

                            @if($feature[0]->feature->lobby_in_building)
                                <li><label><input type="checkbox" checked name="Lobby_in_Building">Lobby in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="Lobby_in_Building">Lobby in Building</label></li>
                            @endif



                            @if($feature[0]->feature->central_air_conditioning)
                                <li><label><input type="checkbox" checked name="Central_Air_Conditioning">Central Air Conditioning</label></li>
                            @else
                                <li><label><input type="checkbox" name="Central_Air_Conditioning">Central Air Conditioning</label></li>

                            @endif

                            @if($feature[0]->feature->central_heating)
                                <li><label><input type="checkbox" checked name="Central_Heating">Central Heating</label></li>
                            @else
                                <li><label><input type="checkbox" name="Central_Heating">Central Heating</label></li>

                            @endif
                            @if($feature[0]->feature->service_elevators_in_building)
                                <li><label><input type="checkbox" checked name="Service_Elevators_in_Building">Service Elevators in Building</label></li>
                            @else
                                <li><label><input type="checkbox" name="Service_Elevators_in_Building">Service Elevators in Building</label></li>

                            @endif

                            @if($feature[0]->feature->waste_disposal)
                                <li><label><input type="checkbox" checked name="Waste_Disposal">Waste Disposal</label></li>
                            @else
                                <li><label><input type="checkbox" name="Waste_Disposal">Waste Disposal</label></li>
                            @endif

                            @if($feature[0]->feature->elevator_or_lift)
                                <li><label><input type="checkbox" checked name="Elevator_or_Lift">Elevator_or_Lift</label></li>
                            @else
                                <li><label><input type="checkbox" name="Elevator_or_Lift">Elevator_or_Lift</label></li>
                            @endif




                        </ul>
                    </div>
                </ul>
                <!--end checkboxes-->
            </div>
            <div class="col-md-6">
                <h3> Buisness and Communication</h3>
                <div  id="b&c">
                    <ul class="checkboxes inline half list-unstyled " >


                        @if($feature[0]->feature->broadband_internet_access)
                            <li><label><input type="checkbox" checked name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                        @else
                            <li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                        @endif

                        @if($feature[0]->feature->satellite_or_cable_tv_ready)
                            <li><label><input type="checkbox" checked name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                        @else
                            <li><label><input type="checkbox" name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                        @endif


                        @if($feature[0]->feature->business_center_or_media_room_building)
                            <li><label><input type="checkbox" checked name="Business_Center_or_Media_Room_in_Building">Business Center or Media Room</label></li>
                        @else
                            <li><label><input type="checkbox" name="Business_Center_or_Media_Room_in_Building">Business Center or Media Room</label></li>
                        @endif



                        @if($feature[0]->feature->confrence_room_in_building)
                            <li><label><input type="checkbox" checked name="Conference_Room_in_Building">Conference Room in Building</label></li>
                        @else
                            <li><label><input type="checkbox" name="Conference_Room_in_Building">Conference Room in Building</label></li>
                        @endif

                        @if($feature[0]->feature->intercom)
                            <li><label><input type="checkbox" checked name="Intercom">Intercom</label></li>
                        @else
                            <li><label><input type="checkbox" name="Intercom">Intercom</label></li>
                        @endif


                        @if($feature[0]->feature->atm_and_machine_in_building)
                            <li><label><input type="checkbox" checked name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in Building</label></li>
                        @else
                            <li><label><input type="checkbox" name="ATM_Credit_Card_Machines_in_Building">ATM Credit Card Machines in BuildingIntercom</label></li>
                        @endif

                        <div class="clearfix"></div>
                        <li> <label>Other Business and Communication <br>Facilities</label> </li>
                        <li><div class="form-group width-60">

                                <input type="text" name="Other_Business_and_Communication_Facilities" value="{{ $feature[0]->feature->other_business_and_communication}}">
                            </div>
                        </li>


                    </ul>
                </div>
                <!--end checkboxes-->
            </div>




            <!--end col-md-4-->
            <div class="col-md-6">
                <h3>Nearby Locations </h3>
                <div  id="N&L">
                    <ul class="checkboxes inline half list-unstyled">


                        @if($feature[0]->feature->nearby_schools)
                            <li><label><input type="checkbox" checked name="Nearby_Schools">Nearby Schools</label></li>
                        @else
                            <li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>
                        @endif

                        @if($feature[0]->feature->nearby_hospitals)
                            <li><label><input type="checkbox" checked name="Nearby_Hospitals">Nearby Hospitals</label></li>
                        @else
                            <li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>
                        @endif

                        @if($feature[0]->feature->nearby_shopping_malls)
                            <li><label><input type="checkbox" checked name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                        @else
                            <li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                        @endif

                        @if($feature[0]->feature->nearby_restaurants)
                            <li><label><input type="checkbox" checked name="Nearby_Restaurants">Nearby Restaurants</label></li>
                        @else
                            <li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>
                        @endif


                        @if($feature[0]->feature->nearby_public_transport)
                            <li><label><input type="checkbox" checked name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>
                        @else
                            <li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>
                        @endif


                        <li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>
                        <div class="clearfix"></div>
                        <li><label>Distance From Airport(kms)</label></li>
                        <li><div class="form-group width-60">

                                <input type="text" name="Distance_From_Airport(kms)" value="{{ $feature[0]->feature->distance_from_airport_kms }}">
                            </div></li>
                    </ul>
                </div>
                <!--end checkboxes-->
            </div>
            <!--end col-md-4-->
        </div>
        <!--end row-->
        <div class="row">

            <!--end col-md-4-->

            <div class="col-md-6">
                <h3>Other Facilities</h3>
                <ul class="checkboxes inline half list-unstyled">


                    @if($feature[0]->feature->maintenance_staff)
                        <li><label><input type="checkbox" checked name="Maintenance_Staff">Maintenance Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>
                    @endif

                    @if($feature[0]->feature->security_staff)
                        <li><label><input type="checkbox" checked  name="Security_Staff">Security Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                    @endif


                    @if($feature[0]->feature->laundry_or_dry_cleaning_facilities)
                        <li><label><input type="checkbox" checked  name="Laundry_or_Dry_Cleaning_Facility">Laundry or Dry Cleaning Facility</label></li>
                    @else
                        <li><label><input type="checkbox" name="Laundry_or_Dry_Cleaning_Facility">Laundry or Dry Cleaning Facility</label></li>
                    @endif



                    @if($feature[0]->feature->facilities_for_disabled)
                        <li><label><input type="checkbox" checked name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @else
                        <li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @endif

                    <li><label>Pet Policy</label></li>


                    <li><div class="form-group width-60">

                            <select name="Pet_Policy_type">
                                <option value="{{ $feature[0]->feature->	pet_policy_type }}">{{ $feature[0]->feature->pet_policy_type}}</option>
                                <option value="" disabled>Select</option>
                                <option value="Pet_Allowed">Allowed</option>
                                <option value="Pet_Not_Allowed">Not Allowed</option>
                            </select>
                        </div>
                    </li>


                    <li><label>Other Facilities</label></li>
                    <li>   <div class="form-group width-60"> <input type="text" name="Other_Facilities" value="{{ $feature[0]->feature->facilities}}">

                        </div>

                    </li>

                </ul>
                <!--end checkboxes-->
            </div>
            <!--end col-md-4-->

        </div>
        <!--end row-->
    </section>
@endsection



