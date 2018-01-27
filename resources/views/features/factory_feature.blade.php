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
                            <label>Electricity Backup</label>
                            <select name="Electricity_Backup_type" class="framed width-80">
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
                                <input type="number" name="Total_Floors_in_Building">
                            {{--</div>--}}
                        </div>
                    </div>







                    <div class="clearfix"></div>





                    <ul>



                        {{--<li><label>View</label><input type="text" name="View"></li>--}}
                        {{--<li><label>Parking Spaces</label><input type="text" name="Parking_Space"></li>--}}




                        <li><label><input type="checkbox" name="Waste_Disposal">Waste Disposal</label></li>





                        <li><label><input type="checkbox" name="Elevator_or_Lift">Elevator or Lift</label></li>
                    </ul>
                </div>
            </ul>
            <!--end checkboxes-->
        </div>

        {{--<div class="col-md-12">--}}
            {{--<h3>Main Features</h3>--}}
            {{--<ul class="checkboxes inline half list-unstyled">--}}
                {{----}}
                 {{--<li><label><input type="text" name="Built_in_Year">Built in Year</label></li>--}}
                {{--<li><label><input type="text" name="Parking_Spaces">Parking Spaces</label></li>--}}
                 {{----}}
                {{--<label>Electricity Backup</label>--}}
                {{--<select name="Electricity_Backup_type">--}}
                {{--<option value="Electricity_Backup_None">None</option>--}}
                {{--<option value="Electricity_Backup_Generator">Generator</option>--}}
                {{--<option value="Electricity_Backup_Ups">Ups</option>--}}
                {{--<option value="Electricity_Backup_Solar">Solar</option>--}}
                {{--<option value="Electricity_Backup_Other">Other</option>--}}
                {{--</select>--}}
                {{----}}
                {{--<li><label><input type="checkbox" name="Waste_Disposal">Waste Disposal</label></li>--}}
                {{----}}
                {{--<li><label><input type="text" name="Total_Floors_in_Building">Total Floors in Building</label></li>--}}
                {{----}}
                {{--<li><label><input type="checkbox" name="Elevator_or_Lift">Elevator or Lift</label></li>                --}}
                {{----}}
                {{--<li><label><input type="text" name="Other_Main_Features">Other Main Features</label></li>--}}
                {{----}}

            {{--</ul>--}}
            {{--<!--end checkboxes-->--}}
        {{--</div>--}}
        <!--end col-md-4-->


        <div class="col-md-6">
            <h3> Buisness and Communication</h3>
            <div  id="b&c">
                <ul class="checkboxes inline half list-unstyled " >

                    <li><label><input type="checkbox" name="Broadband_Internet_Access">Broadband Internet Access</label></li>
                    <li><label><input type="checkbox" name="Satellite_or_TV_Cable_Ready">Satellite or TV Cable Ready</label></li>

                    <div class="clearfix"></div>
                    <li> <label>Other Business and Communication <br>Facilities</label> </li>
                    <li><div class="form-group width-60">

                            <input type="text" name="Other_Business_and_Communication_Facilities">
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

                    <li><label><input type="checkbox" name="Nearby_Schools">Nearby Schools</label></li>
                    <li><label><input type="checkbox" name="Nearby_Hospitals">Nearby Hospitals</label></li>
                    <li><label><input type="checkbox" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>
                    <li><label><input type="checkbox" name="Nearby_Restaurants">Nearby Restaurants</label></li>
                    <li><label><input type="checkbox" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>

                    {{--<li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>--}}
                    <div class="clearfix"></div>
                    <li><label>Distance From Airport(kms)</label></li>
                    <li><div class="form-group width-60">

                            <input type="text" name="Distance_From_Airport(kms)">
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

                <li><label><input type="checkbox" name="Maintenance_Staff">Maintenance Staff</label></li>
                <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                <li><label><input type="checkbox" name="Facilities_for_Disabled">Facilities for Disabled</label></li>
                <div class="clearfix"></div>
                <li> <label>Other  <br>Facilities</label> </li>
                <li><div class="form-group width-60">

                        <input type="text" name="Other_Facilities">
                    </div>
                </li>



            </ul>
            <!--end checkboxes-->
        </div>

        <!--end col-md-4-->

        <div class="col-md-6">
            <h3>Healthcare Recreational</h3>
            <ul class="checkboxes inline half list-unstyled">

                <li><label><input type="checkbox" name="Lawn_or_Garden">Lawn or Garden</label></li>


                <li><label>Other Healthcare and Recreation Facilities</label></li>


                <li><div class="form-group width-60">

                        <input type="text" name="Other_Healthcare_and_Recreation_Facilities">
                    </div>
                </li>

            </ul>
            <!--end checkboxes-->
        </div>


    </div>
    <!--end row-->
</section>
