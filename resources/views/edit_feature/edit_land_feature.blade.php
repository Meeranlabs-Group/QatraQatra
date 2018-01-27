@extends('edit_feature.mainview')
@section('body')
    <section id="features">
    <div class="title">
        <h2>Features</h2>
        <aside class="step">4</aside>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Plot Features</h3>
            <ul class="checkboxes inline half list-unstyled">


                @if($feature[0]->possesion)
                    <li><label><input type="checkbox" checked  name="Possesion">Possesion</label></li>
                @else
                    <li><label><input type="checkbox" name="Possesion">Possesion</label></li>
                @endif

                    @if($feature[0]->disputed)
                        <li><label><input type="checkbox" checked  name="Disputed">Disputed</label></li>
                    @else
                        <li><label><input type="checkbox" name="Disputed">Disputed</label></li>
                    @endif

                    @if($feature[0]->electricity)
                        <li><label><input type="checkbox" checked  name="Electricity">Electricity</label></li>
                    @else
                        <li><label><input type="checkbox" name="Electricity">Electricity</label></li>
                    @endif

                    @if($feature[0]->sui_gas)
                        <li><label><input type="checkbox" checked  name="Sui_Gas">Sui Gas</label></li>
                    @else
                        <li><label><input type="checkbox" name="Sui_Gas">Sui Gas</label></li>
                    @endif

                    @if($feature[0]->Irrigation)
                        <li><label><input type="checkbox" checked  name="Irrigation">Irrigation</label></li>
                    @else
                        <li><label><input type="checkbox" name="Irrigation">Irrigation</label></li>
                    @endif

                    @if($feature[0]->Tube_Wells)
                        <li><label><input type="checkbox" checked  name="Tube_Wells">Tube Wells</label></li>
                    @else
                        <li><label><input type="checkbox" name="Tube_Wells">Tube Wells</label></li>
                    @endif

                    @if($feature[0]->Accessible_by_Road)
                        <li><label><input type="checkbox" checked  name="Accessible_by_Road">Accessible by Road</label></li>
                    @else
                        <li><label><input type="checkbox" name="Accessible_by_Road">Accessible by Road</label></li>
                    @endif

                    @if($feature[0]->Perimeter_Fencing)
                        <li><label><input type="checkbox" checked  name="Perimeter_Fencing">Perimeter Fencing</label></li>
                    @else
                        <li><label><input type="checkbox" name="Perimeter_Fencing">Perimeter Fencing</label></li>
                    @endif

                    @if($feature[0]->Is_Land_Fertile)
                        <li><label><input type="checkbox" checked  name="Is_Land_Fertile">Is Land Fertile</label></li>
                    @else
                        <li><label><input type="checkbox" name="Is_Land_Fertile">Is Land Fertile</label></li>
                    @endif

                    @if($feature[0]->Boundary_Lines)
                        <li><label><input type="checkbox" checked  name="Boundary_Lines">Boundary Lines</label></li>
                    @else
                        <li><label><input type="checkbox" name="Boundary_Lines">Boundary Lines</label></li>
                    @endif




                <li><label>Nearby Water Resources</label></li>
                <li><div class="form-group width-60">
                        <input type="text" name="Nearby_Water_Resources" value="{{ $feature[0]->Nearby_Water_Resources }}">

                    </div>
                </li>
                <li><label>Other Land Features</label></li>
                <li><div class="form-group width-60">
                        <input type="text" name="Other_Land_Features" value="{{ $feature[0]->Other_Land_Features }}">

                    </div>
                </li>


                {{--<li><label><input type="text" name="Nearby_Water_Resources">Nearby Water Resources</label></li> --}}
                {{--<li><label><input type="text" name="Other_Land_Features">Other Land Features</label></li> --}}

            </ul>
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
        {{--<div class="col-md-6">--}}
            {{--<h3>Nearby Locations and Other Facilities</h3>--}}
            {{--<ul class="checkboxes inline half list-unstyled">--}}
                {{--<li><label><input type="text" name="Nearby_Schools">Nearby Schools</label></li>--}}
                {{--<li><label><input type="text" name="Nearby_Hospitals">Nearby Hospitals</label></li>--}}
                {{--<li><label><input type="text" name="Nearby_Shopping_Malls">Nearby Shopping Malls</label></li>--}}
                {{--<li><label><input type="text" name="Nearby_Restaurants">Nearby Restaurants</label></li>--}}
                {{--<li><label><input type="text" name="Distance_From_Airport(kms)">Distance From Airport(kms)</label></li>--}}
                {{--<li><label><input type="text" name="Nearby_Public_Transport_Service">Nearby Public Transport Service</label></li>--}}
                {{--<li><label><input type="text" name="Other_Nearby_Places">Other Nearby Places</label></li>--}}

            {{--</ul>--}}
            {{--<!--end checkboxes-->--}}
        {{--</div>--}}
    </div>
    <!--end row-->
    
    <div class="row">

        <div class="col-md-4">
            <h3>Other Facilities</h3>
            <ul class="checkboxes inline half list-unstyled">
                @if($feature[0]->security_staff)
                    <li><label><input type="checkbox" checked  name="Security_Staff">Security Staff</label></li>
                @else
                    <li><label><input type="checkbox" name="Security_Staff">Security Staff</label></li>
                @endif

                    <li><label>Other Facilities</label></li>
                    <li>   <div class="form-group width-60"> <input type="text" name="Other_Facilities" value="{{ $feature[0]->facilities}}">

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
