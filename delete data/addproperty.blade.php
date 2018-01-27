@include('include.head')

@include('partials.navbar')






    <div class="page-wrapper">

        <div id="page-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Listing</a></li>
                    <li class="active">Detail</li>
                </ol>
                <!--end breadcrumb-->
                <div class="main-content">
                    <div class="title">
                        <h1>Submit Accommodation</h1>
                    </div>
                    <!--end title-->
                    <div class="quick-navigation" data-fixed-after-touch="">
                        <div class="wrapper">
                            <ul>

                                <li><a href="#main-information" class="scroll">Main Information</a></li>
                                <li><a href="#location" class="scroll">Location</a></li>
                                <li><a href="#gallery" class="scroll">Gallery</a></li>
                                <li><a href="#facilities" class="scroll">Facilities</a></li>
                                <li><a href="#additional-information" class="scroll">Additional Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--end quick-navigation-->


                    {!! Form::open(['action' => 'PropertyController@store','class' =>'form-submit labels-uppercase ','id'=> 'form-submit', 'enctype'=> 'multipart/form-data']) !!}



<div class="row">
    <div class="col-md-6">
                                <label for="object-type">Purpose <span style="color: red">*</span></label>

                                <select class="framed width-100 " name="property_type" id="object-type"  >

                                    <option value="">Select</option>
                                    <option value="1">For Sale</option>
                                    <option value="2">Rent</option>
                                </select>
    </div>



    <div class="col-md-6">
        <label for="object-type">Object Type</label>

        <select class="framed width-100" name="property_type" id="Property-type"  disabled>

            <option value="">  Any Type  </option>
            <option value="">  --- HOUSE --- </option>
            <option value="Houses">  Houses</option>
            <option value="Flates">  Flates</option>
            <option value="Upper-Portions">  Upper Portions</option>
            <option value="Lower-Portions">  Lower Portions</option>
            <option value="Farms-House">  Farms House</option>
            <option value="Rooms">  Rooms</option>

            <option value="">  --- PLOTS ---</option>
            <option value="Residential-Plots">  Residential Plots</option>
            <option value="Commercial-Plots">  Commercial Plots</option>
            <option value="Agricultural-Land">  Agricultural Land</option>
            <option value="Industrial-Land">  Industrial Land</option>
            <option value="Plot-Files">  Plot Files</option>
            <option value="Plot-Forms">  Plot Forms</option>

            <option value="">  --- COMMERCIAL ---</option>
            <option value="Offices">  Offices</option>
            <option value="Shops">  Shops</option>
            <option value="Warehouses">  Warehouses</option>
            <option value="Factories">  Factories</option>
            <option value="Buildings">  Buildings</option>
            <option value="Other">  Other</option>

        </select>
    </div>


</div>

                        <div class="hidden" id="main-info" >

                            @include('addProperty.main-information')
                            @include('addProperty.location')
                            @include('addProperty.gallery')


                            {{--house feature--}}
                            <div  id="Houses">
                                @include('features.house')
                                @include('addProperty.additional-information')
                            </div>



                            {{--commercial factory--}}
                            <div  id="Factories">
                                @include('features.factory_feature')
                                @include('addProperty.additional-information')
                            </div>
                            {{--commpercial building--}}
                            <div  id="Buildings">
                                @include('features.building_feature')
                                @include('addProperty.additional-information')
                            </div>



                            {{--houses--}}
                             <div  id="Flates">
                                @include('features.flat_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--plot commercil agriculture--}}

                            <div id="Agricultural-Land">
                                @include('features.land_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--plot commercil agriculture--}}

                            <div id="Industrial-Land">
                                @include('features.land_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--compercail--}}
                            <div id="Commercial-office">
                                @include('features.office_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--commercial--}}
                            <div id="Other">
                                @include('features.other_feature')
                                @include('addProperty.additional-information')
                            </div>

                {{--plot--}}
                            <div id="Commercial-Plots">
                                @include('features.plot_feature')
                                @include('addProperty.additional-information')
                            </div>

               {{--plot--}}
                            <div id="Residential-Plots">
                                @include('features.plot_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--houses  lower and upper and farm house--}}
                            <div id="Lower-Portions">
                                @include('features.portion&farm_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--houses  lower and upper and farm house--}}
                            <div id="Upper-Portions">
                                @include('features.portion&farm_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--houses  lower and upper and farm house--}}
                            <div id="Farms-House">
                                @include('features.portion&farm_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--shop feature--}}
                            <div id="Shops">
                                @include('features.shop_feature')
                                @include('addProperty.additional-information')
                            </div>

                            {{--commercial warehouse --}}
                            <div id="Warehouses">
                                @include('features.warehouse_feature')
                                @include('addProperty.additional-information')
                            </div>


                        </div>


                        <hr>
                        <section>
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Submit Now</button>
                            </div>
                        </section>
                        <section>
                            <div class="center"><a href="#" class="btn btn-framed btn-default btn-rounded">Preview</a></div>
                        </section>
                    </div>
                {!! Form::close() !!}
                <!--end form-->
                </div>
                <!--end main-content-->
            </div>
            <!--end container-->
        </div>

        <!--end page-content-->
    </div>
<!--end page-wrapper-->


<script>
    document.getElementById('object-type').onchange = function () {
        document.getElementById("Property-type").disabled = this.value == '01';
    }



    document.getElementById('Property-type').onchange = function () {
        $("#main-info").removeClass("hidden");
        $("#Houses").addClass("hidden");
        $("#Buildings").addClass("hidden");
        $("#Factories").addClass("hidden");
        $("#Flates").addClass("hidden");
        $("#Agricultural-Land").addClass("hidden");
        $("#Industrial-Land").addClass("hidden");
        $("#Commercial-Plots").addClass("hidden");
        $("#Residential-Plots").addClass("hidden");
        $("#Commercial-office").addClass("hidden");
        $("#Lower-Portions").addClass("hidden");
        $("#Upper-Portions").addClass("hidden");
        $("#Farms-House").addClass("hidden");
        $("#Shops").addClass("hidden");
        $("#Warehouses").addClass("hidden");
        $("#Other").addClass("hidden");




                var e = document.getElementById("Property-type");
                var value = e.options[e.selectedIndex].value;
                var str1="#";
                var text = e.options[e.selectedIndex].text;
                var text=str1.concat(value);
                $(text).removeClass("hidden");

    }




</script>

@include('partials.footer')
@include('include.foot')