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

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group width-80">
                                    <label>Built in Year</label>
                                    <select  name="Built_in_Year" class="framed width-80">
                                        <option value="{{ $feature[0]->built_in_year }}">{{ $feature[0]->built_in_year }}</option>
                                        <option value="" disabled>Select</option>
                                        <?php
                                        for($i = 1990 ; $i <= date('Y'); $i++){

                                            if( $feature[0]->built_in_year == $i)
                                            {
                                                echo "<option value=".$i." selected>".$i."</option>";
                                            }
                                            else{
                                            echo "<option value=".$i.">".$i."</option>";
                                            }
                                        }
                                        ?>

                                    </select>


                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group width-80">
                                    <label>Parking Spaces</label>
                                    <select  name="Parking_Spaces" class="framed width-80">

                                        <option value="{{$feature[0]->parking_space }}" selected>{{$feature[0]->parking_space }}</option>

                                        <option value="">Select</option>



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
                                    <label>Number of Bedrooms</label>


                                    <select  name="Number_of_Bedrooms" class="framed width-80">

                                        <option value="{{$feature[0]->number_of_bedrooms }}" selected>{{$feature[0]->number_of_bedrooms}}</option>

                                        <option value="">Select</option>



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
                                    <label>Number of Kitchens</label>
                                    <select  name="Number_of_Kitchens" class="framed width-80">


                                        <option value="{{$feature[0]->number_of_kitchens }}" selected>{{$feature[0]->number_of_kitchens}}</option>

                                        <option value="">Select</option>

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
                                    <label>Number of Bathrooms</label>

                                    <select  name="Number_of_Bathrooms" class="framed width-80">

                                        <option value="{{$feature[0]->number_of_bathrooms }}" selected>{{$feature[0]->number_of_bathrooms}}</option>

                                        <option value="">Select</option>


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
                                    <select name="Flooring_type" class="framed width-80">
                                        <option value="{{ $feature[0]->flooring_type  }}">{{ $feature[0]->flooring_type  }}</option>
                                        <option disabled>Select</option>
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

                                        <option value="{{ $feature[0]->electricity_backup_type }}">{{ $feature[0]->electricity_backup_type }}</option>
                                        <option value="">Select</option>

                                        <option value="None">None</option>
                                        <option value="Generator">Generator</option>
                                        <option value="Ups">Ups</option>
                                        <option value="Solar">Solar</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group width-70">

                                    <label>Total Number of Floors</label>


                                    <input type="number" name="Total_Number_of_Floors" placeholder="1" min="1" value="{{ $feature[0]->total_number_of_floors }}">

                                    {{--</div>--}}
                                </div>
                            </div>


                            <ul>










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

                    <!--end col-md-4-->

                    <div class="col-md-6">
                        <h3>Rooms</h3>
                        <div  id="R">
                            <ul class="checkboxes inline half list-unstyled">

                                @if($feature[0]->drawing_room)
                                    <li><label><input type="checkbox" checked name="Drawing_Room">Drawing Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Drawing_Room">Drawing Room</label></li>
                                @endif


                                @if($feature[0]->dining_room)
                                    <li><label><input type="checkbox" checked name="Dining_Room">Dining Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Dining_Room">Dining Room</label></li>
                                @endif

                                @if($feature[0]->study_room)
                                    <li><label><input type="checkbox" checked name="Study_Room">Study Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Study_Room">Study Room</label></li>
                                @endif


                                @if($feature[0]->prayer_room)
                                    <li><label><input type="checkbox"checked name="Prayer_Room">Prayer Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Prayer_Room">Prayer Room</label></li>
                                @endif


                                @if($feature[0]->powder_room)
                                    <li><label><input type="checkbox" checked name="Powder_Room">Powder Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Powder_Room">Powder Room</label></li>
                                @endif


                                @if($feature[0]->gym_room)
                                    <li><label><input type="checkbox"checked  name="Gym_Room">Gym Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Gym_Room">Gym Room</label></li>
                                @endif


                                @if($feature[0]->steaming_room)
                                    <li><label><input type="checkbox" checked name="Steaming_Room">Steaming Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Steaming_Room">Steaming Room</label></li>
                                @endif


                                @if($feature[0]->lounge_or_sitting_room)
                                    <li><label><input type="checkbox"checked  name="Lounge_or_Sitting_Room">Lounge or Sitting Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Lounge_or_Sitting_Room">Lounge or Sitting Room</label></li>
                                @endif

                                @if($feature[0]->laundry_room)
                                    <li><label><input type="checkbox" checked  name="Laundry_Room">Laundry Room</label></li>
                                @else
                                    <li><label><input type="checkbox" name="Laundry_Room">Laundry Room</label></li>
                                @endif

                                <div class="clearfix"></div>
                                <li><label>Other Rooms</label></li>
                                <li>
                                    <div class="form-group width-60">
                                        <input type="number" name="Other_Rooms" value="{{ $feature[0]->other_room}}">
                                    </div>
                                </li>


                                <li><label>Number of Servant Quarters</label> </li>
                                </li>
                                <li> <div class="form-group width-60">

                                        <input type="number" name="Number_of_Servant_Quarters" value="{{ $feature[0]->number_of_servant_quaters}}">

                                    </div> </li>


                                <li>  <label>Number of Store Rooms</label> </li>
                                <li>
                                    <div class="form-group width-60">

                                        <input type="number" name="Number_of_Store_Rooms" value="{{ $feature[0]->number_of_store_rooms}}">

                                    </div>

                            </ul>

                        </div>
                    </div>

                    <!--end col-md-4-->
                    <div class="col-md-6">
                        <h3>Healthcare Recreational</h3>
                        <ul class="checkboxes inline half list-unstyled">

                            @if($feature[0]->lawn_or_garden)
                                <li><label><input type="checkbox" checked name="Lawn_or_Garden">Lawn or Garden</label></li>
                            @else
                                <li><label><input type="checkbox" name="Lawn_or_Garden">Lawn or Garden</label></li>
                            @endif



                        @if($feature[0]->swimming_pool)
                                <li><label><input type="checkbox" checked name="Swimming_Pool">Swimming Pool</label></li>
                            @else
                                <li><label><input type="checkbox" name="Swimming_Pool">Swimming Pool</label></li>
                            @endif


                            @if($feature[0]->sauna)
                                <li><label><input type="checkbox" checked name="Sauna">Sauna</label></li>
                            @else
                                <li><label><input type="checkbox" name="Sauna">Sauna</label></li>
                            @endif

                            @if($feature[0]->jacuzzi)
                                <li><label><input type="checkbox" checked name="Jacuzzi">Jacuzzi</label></li>
                            @else
                                <li><label><input type="checkbox" name="Jacuzzi">Jacuzzi</label></li>
                            @endif


                            <li><label>Other Healthcare and Recreation Facilities</label></li>
                            <li>
                                <div class="form-group width-60">
                                    <input type="text" name="Other_Healthcare_and_Recreation_Facilities" value="{{ $feature[0]->other_health_and_recreational }}">
                                </div></li>
                        </ul>
                        <!--end checkboxes-->
                    </div>

                    <div class="col-md-6">
                        <h3>Other Facilities</h3>
                        <div  id="O&F">
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


                                    <li><label>Other Facilities</label></li>
                                    <li>   <div class="form-group width-60"> <input type="text" name="Other_Facilities" value="{{ $feature[0]->facilities}}">

                                        </div>

                                    </li>

                            </ul>
                        </div>
                        <!--end checkboxes-->
                    </div>
                    <!--end col-md-4-->
                </div>

                </section>

    @endsection