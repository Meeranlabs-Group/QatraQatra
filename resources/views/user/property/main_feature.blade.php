


        @if($data[0]->central_heating!="")
            <div class="col-md-4 col-sm-4">
                <div class="feature">
                    <h5><i class="icon_box-checked" style="color: #1fad83"> </i>Central Heating</h5>
                </div>
                <!--end feature-->
            </div>
        @endif

        <div class="row">
            @if($data[0]->built_in_year!="")
                <li>Built in Year  <strong>{{$data[0]->built_in_year}}</strong></li>
            @endif

            @if($data[0]->total_number_of_floors!="")

                <li>Total Number of Floors  <strong>{{$data[0]->total_number_of_floors}}</strong></li>
            @endif

            @if($data[0]->electricity_backup_type!="")
                <li>Electricity Backup Type <strong>{{$data[0]->electricity_backup_type}}</strong></li>
            @endif

            @if($data[0]->	flooring_type!="")
                <li>Flooring Type <strong>{{$data[0]->flooring_type}}</strong></li>
            @endif

            {{ $data[0]->central_air_conditioning}}
            @if($data[0]->double_glazed_window!="")
                <label><input type="checkbox" checked disabled >Double Glazed Windows</label>
            @endif


            @if($data[0]->central_air_conditioning!="")
                <label><input type="checkbox" checked disabled >Central Air Conditioning</label>
            @endif


            @if($data[0]->central_heating!="")
                <label><input type="checkbox" checked disabled>Central Heating</label>
            @endif


            @if($data[0]->waste_disposal!="")
                <label><input type="checkbox" checked disabled >Waste Disposal</label>
            @endif

            @if($data[0]->furnished!="")
                <label><input type="checkbox" checked disabled name="Central_Air_Conditioning">Furnished</label>
            @endif
        </div>



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
        <!--end feature-->


        </div>




        {{--<h3>Nearby Location</h3>--}}
        {{--@if($data[0]->nearby_schools!="")--}}
            {{--<label><input type="checkbox" checked disabled >Nearby Schools</label>--}}
        {{--@endif--}}

        {{--@if($data[0]->nearby_hospitals!="")--}}
            {{--<label><input type="checkbox" checked disabled >Nearby Hospitals</label>--}}
        {{--@endif--}}

        {{--@if($data[0]->nearby_shopping_malls!="")--}}
            {{--<label><input type="checkbox" checked disabled >Nearby Shopping Malls</label>--}}
        {{--@endif--}}

        {{--@if($data[0]->nearby_restaurants!="")--}}
            {{--<label><input type="checkbox" checked disabled >Nearby Restaurants</label>--}}
        {{--@endif--}}
        {{--@if($data[0]->nearby_public_transport!="")--}}
            {{--<label><input type="checkbox" checked disabled >Nearby Public Transport Service</label>--}}
        {{--@endif--}}

        {{--@if($data[0]->distance_from_airport_kms!="")--}}
            {{--<li>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></li>--}}
        {{--@endif--}}







        {{--<h3>Other Facilities</h3>--}}


        {{--@if($data[0]->security_staff!="")--}}
            {{--<label><input type="checkbox" checked disabled >Security Staff</label>--}}
        {{--@endif--}}

        {{--@if($data[0]->other_facilities!="")--}}
            {{--<li>Other Facilities<strong>{{$data[0]->other_facilities}}</strong></li>--}}
        {{--@endif--}}








