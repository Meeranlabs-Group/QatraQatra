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
                                <option value="{{ $feature[0]->built_in_year }}">{{ $feature[0]->built_in_year }}</option>
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
                                <option value="{{ $feature[0]->parking_space }}">{{ $feature[0]->parking_space }}</option>
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
                                <option value="{{ $feature[0]->Flooring_type }}">{{ $feature[0]->Flooring_type }}</option>
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
                                <option value="{{ $feature[0]->Electricity_Backup_type }}">{{ $feature[0]->Electricity_Backup_type }}</option>
                                <option disabled>Select</option>
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
                            <input type="number"  name="Total_Floors_in_Building" value="{{ $feature[0]->total_floor_building }}">
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
                            <input type="number"  name="Number_of_Elevators_in_Building" value="{{ $feature[0]-> number_of_elevators_in_building }}">

                            {{--</div>--}}


                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="form-group width-80">
                            <label>View</label>

                            <input type="number"  name="View" value="{{ $feature[0]->View }}">
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





                        @if($feature[0]->Lobby_in_Building)
                            <li><label><input type="checkbox" checked name="Lobby_in_Building">Lobby in Building</label></li>
                        @else
                            <li><label><input type="checkbox" name="Lobby_in_Building">Lobby in Building</label></li>
                        @endif

                            @if($feature[0]->double_glazed_window)
                                <li><label><input type="checkbox" checked name="Double_Glazed_Windows">Double Glazed Windows</label></li>
                            @else
                                <li><label><input type="checkbox" name="Double_Glazed_Windows">Double Glazed Windows</label></li>
                            @endif




                        @if($feature[0]->central_air_conditioning)
                            <li><label><input type="checkbox" checked name="Central_Air_Conditioning">Central Air Conditioning</label></li>
                        @else
                            <li><label><input type="checkbox" name="Central_Air_Conditioning">Central Air Conditioning</label></li>

                        @endif

                        @if($feature[0]->central_heating)
                            <li><label><input type="checkbox" checked name="Central_Heating">Central Heating</label></li>
                        @else
                            <li><label><input type="checkbox" name="Central_Heating">Central Heating</label></li>

                        @endif
                        @if($feature[0]->service_elevators_in_building)
                            <li><label><input type="checkbox" checked name="Service_Elevators_in_Building">Service Elevators in Building</label></li>
                        @else
                            <li><label><input type="checkbox" name="Service_Elevators_in_Building">Service Elevators in Building</label></li>

                        @endif

                        @if($feature[0]->waste_disposal)
                            <li><label><input type="checkbox" checked name="Waste_Disposal">Waste Disposal</label></li>
                        @else
                            <li><label><input type="checkbox" name="Waste_Disposal">Waste Disposal</label></li>
                        @endif


                            @if($feature[0]->furnished)
                                <li><label><input type="checkbox" checked name="Furnished">Furnished</label></li>
                            @else
                                <li><label><input type="checkbox" name="Furnished">Furnished</label></li>
                            @endif


                    </ul>


                </div>
            </ul>
            <!--end checkboxes-->
        </div>



        <!--end col-md-4-->
        <div class="col-md-6">
            <h3> Buisness and Communication</h3>
            <div  id="b&c">
                <ul class="checkboxes inline half list-unstyled " >


                    @if($feature[0]->broadband_internet_access)
                        <li><label><input type="checkbox" checked name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                    @else
                        <li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                    @endif

                    @if($feature[0]->satellite_or_cable_tv_ready)
                        <li><label><input type="checkbox" checked name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                    @else
                        <li><label><input type="checkbox" name="Satellite_or_Cable_TV_Ready">Satellite or Cable TV Ready</label></li>
                    @endif



                    @if($feature[0]->intercom)
                        <li><label><input type="checkbox" checked name="Intercom">Intercom</label></li>
                    @else
                        <li><label><input type="checkbox" name="Intercom">Intercom</label></li>
                    @endif


                    <div class="clearfix"></div>
                    <li> <label>Other Business and Communication <br>Facilities</label> </li>
                    <li><div class="form-group width-60">

                            <input type="text" name="Other_Business_and_Communication_Facilities" value="{{ $feature[0]->other_business_and_communication}}">
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


                    @if($feature[0]->nearby_schools)
                        <li><label><input type="checkbox" checked name="Nearby_Schools">Nearby Schools</label></li>
                    @else
                        <li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>
                    @endif

                    @if($feature[0]->nearby_hospitals)
                        <li><label><input type="checkbox" checked name="Nearby_Hospitals">Nearby Hospitals</label></li>
                    @else
                        <li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>
                    @endif

                    @if($feature[0]->nearby_shopping_malls)
                        <li><label><input type="checkbox" checked name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                    @else
                        <li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                    @endif

                    @if($feature[0]->nearby_restaurants)
                        <li><label><input type="checkbox" checked name="Nearby_Restaurants">Nearby Restaurants</label></li>
                    @else
                        <li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>
                    @endif


                    @if($feature[0]->nearby_public_transport)
                        <li><label><input type="checkbox" checked name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>
                    @else
                        <li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>
                    @endif


                    <li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>
                    <div class="clearfix"></div>
                    <li><label>Distance From Airport(kms)</label></li>
                    <li><div class="form-group width-60">

                            <input type="text" name="Distance_From_Airport(kms)" value="{{ $feature[0]->distance_from_airport_kms }}">
                        </div></li>
                </ul>
            </div>
            <!--end checkboxes-->
        </div>

        <!--end col-md-4-->
    </div>
    <!--end row-->
    <div class="row">

        <div class="row">
            <div class="col-md-6">
                <h3>Rooms</h3>
                <ul class="checkboxes inline half list-unstyled">

                    <li><label>Number of Rooms</label></li>
                    <li><div class="form-group width-60">
                            <input type="text" name="Number_of_Rooms" value="{{ $feature[0]->Number_of_Rooms }}">

                        </div></li>


                    <li><label>Number of Servant Quarters</label></li>
                    <li><div class="form-group width-60">
                            <input type="text" name="Number_of_Servant_Quarters" value="{{ $feature[0]->Number_of_Servant_Quarters }}">

                        </div></li>


                    <li><label>Other Rooms</label></li>
                    <li><div class="form-group width-60">
                            <input type="text" name="Other_Rooms" value="{{ $feature[0]->Other_Rooms }}">

                        </div></li>



                </ul>
                <!--end checkboxes-->
            </div>
            <!--end col-md-4-->


            <!--end col-md-4-->
            <div class="col-md-6">
                <h3>Healthcare Recreational</h3>
                <ul class="checkboxes inline half list-unstyled">
                    <div class="clearfix"></div>

                    @if($feature[0]->lawn_or_garden)
                        <li><label><input type="checkbox" checked name="Swimming_Pool">Lawn or Garden</label></li>
                    @else
                        <li><label><input type="checkbox" name="Swimming_Pool">Lawn or Garden</label></li>
                    @endif


                    <li><label>Other Healthcare and Recreation Facilities</label></li>
                    <li><div class="form-group width-60">
                            <input type="text" name="Other_Healthcare_and_Recreation_Facilities" value="{{ $feature[0]->Other_Healthcare_and_Recreation_Facilities }}">

                        </div>
                    </li>

                </ul>
                <!--end checkboxes-->
            </div>
            <!--end col-md-4-->
            <div class="col-md-6">
                <h3>Other Facilities</h3>
                <ul class="checkboxes inline half list-unstyled">
                    @if($feature[0]->maintenance_staff)
                        <li><label><input type="checkbox" checked name="Maintenance_Staff">Maintenance Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>
                    @endif

                    @if($feature[0]->security_staff)
                        <li><label><input type="checkbox" checked  name="Security_Staff">Security Staff</label></li>
                    @else
                        <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                    @endif

                    @if($feature[0]->facilities_for_disabled)
                        <li><label><input type="checkbox" checked name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @else
                        <li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                    @endif

                    <div class="clearfix"></div>



                        <div class="form-group width-40">
                            <li>  <label>Pet Policy</label> </li>
                            <select  name="Pet_Policy_type" class="framed width-80">
                                <option value="{{ $feature[0]->Pet_Policy_type }}">{{ $feature[0]->Pet_Policy_type }}</option>
                                <option value="" disabled>Select</option>

                                <option value="Pet_Policy_Allowed">Allowed</option>
                                <option value="Pet_Policy_Not_Allowed">Not Allowed</option>

                            </select>
                        </div>


                    <div class="clearfix"></div>
                        <li><label>Other Facilities</label></li>
                        <li>   <div class="form-group width-60"> <input type="text" name="Other_Facilities" value="{{ $feature[0]->other_facilities }}">

                            </div>

                        </li>


                </ul>
                <!--end checkboxes-->
            </div>

        </div>


        {{--<div class="col-md-6">--}}
            {{--<h3>Rooms</h3>--}}
            {{--<ul class="checkboxes inline half list-unstyled">--}}
                {{----}}
                {{--<li><label><input type="text" name="Number_of_Rooms">Number of Rooms</label></li>--}}
                {{--<li><label><input type="text" name="Number_of_Servant_Quarters">Number of Servant Quarters</label></li>--}}
                {{--<li><label><input type="text" name="Other_Rooms">Other Rooms</label></li>--}}
                {{----}}
                {{--</ul>--}}
            {{--<!--end checkboxes-->--}}
        {{--</div>--}}
        <!--end col-md-4-->

        <!--end col-md-4-->
    </div>
    <!--end row-->
</section>
@endsection