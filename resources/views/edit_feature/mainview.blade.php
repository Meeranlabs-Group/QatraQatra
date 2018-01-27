@include('include.head')

@include('partials.navbar')
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

            <div  class="quick-navigation" data-fixed-after-touch="">
                <div class="wrapper">
                    <ul>

                        <li><a href="#main-information" class="scroll">Main Information</a></li>
                        <li><a href="#location" class="scroll">Location</a></li>
                        <li><a href="#gallery" class="scroll">Gallery</a></li>
                        <li><a href="#features" class="scroll">Features</a></li>
                        {{--<li><a href="#additional-information" class="scroll">Additional Information</a></li>--}}
                    </ul>
                </div>
            </div>
            <!--end quick-navigation-->


            {!! Form::open(['url' => '/updateproperty','files'=>'true', 'enctype'=>'multipart/form-data']) !!}

            <div class="form-submit labels-uppercase" id="form-submit" >


                <div class="row" >
                    <div class="col-md-3 ">


                        <input type="number" hidden name="property_id" value="{{ $feature[0]->id }}">
                        {{--<input type="number" hidden name="feature_id" value="{{ $feature[0]->id }}">--}}

                        <label for="object-type">Purpose <span style="color: red">*</span></label>

                        <select class="framed width-100 " name="purpose" id="object-type"  >


                            <option value="{{ $feature[0]->purpose }}" selected>{{ $feature[0]->purpose}}</option>
                            <option disabled="">Select</option>
                            <option value="Sale">For Sale</option>
                            <option value="Rent">Rent</option>
                        </select>
                    </div>

                    {{--<input type="hidden" value="{{ $property[0]->id}}" id="id" name="id"></input>--}}

                    <div class="col-md-3 ">
                        <label for="object-type">Object Type</label>

                        <select class="framed width-100" name="property_type" id="Property-type1"  >

                            <option value="{{ $feature[0]->property_type }}" selected>{{ $feature[0]->property_type }}</option>

                            {{--<option value="" disabled>  --- HOUSE --- </option>--}}


                            {{--<option value="Houses" >  Houses</option>--}}

                            {{--<option value="Flates">  Flates</option>--}}

                            {{--<option value="Upper-Portions">  Upper Portions</option>--}}
                            {{--<option value="Lower-Portions">  Lower Portions</option>--}}
                            {{--<option value="Farms-House">  Farms House</option>--}}
                            {{--<option value="Rooms">  Rooms</option>--}}

                            {{--<option value="" disabled>  --- PLOTS ---</option>--}}
                            {{--<option value="Residential-Plots">  Residential Plots</option>--}}
                            {{--<option value="Commercial-Plots">  Commercial Plots</option>--}}
                            {{--<option value="Agricultural-Land">  Agricultural Land</option>--}}
                            {{--<option value="Industrial-Land">  Industrial Land</option>--}}
                            {{--<option value="Plot-Files">  Plot Files</option>--}}
                            {{--<option value="Plot-Forms">  Plot Forms</option>--}}

                            {{--<option value="" disabled>  --- COMMERCIAL ---</option>--}}
                            {{--<option value="Offices">  Offices</option>--}}
                            {{--<option value="Shops">  Shops</option>--}}
                            {{--<option value="Warehouses">  Warehouses</option>--}}
                            {{--<option value="Factories">  Factories</option>--}}
                            {{--<option value="Buildings">  Buildings</option>--}}
                            {{--<option value="Other">  Other</option>--}}

                        </select>
                    </div>


                </div>

                <br>
                <br>
                <br>
                <hr>

                @include('edit_Property.edit_main-information')
                @include('edit_Property.edit_location')
                @include('edit_Property.edit_gallery')

                <section id="facilities">


                    @yield('body')


                </section>







                <hr>
                <section>
                    <div class="form-group center">
                        <button type="submit" id="button" class="btn btn-primary btn-rounded btn-xlarge">Submit Now</button>
                    </div>
                </section>
                {{--<section>--}}
                {{--<div class="center"><a href="#" class="btn btn-framed btn-default btn-rounded">Preview</a></div>--}}
                {{--</section>--}}





            </div>
        {!! Form::close() !!}
        <!--end form-->
        </div>
        <!--end main-content-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->

<script>
    document.getElementById('Property-type1').onchange = function () {

        var e = document.getElementById("Property-type1");
        var g = document.getElementById("id");
        var value2=g.value;
        var value = e.options[e.selectedIndex].value;
        $('#facilities').html('');
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });
        $.ajax
        ({
            url: '{{ url('/load') }}',
            data:({"id":value2,"property_type":value}),
            type: 'POST',
            dataType: 'html',
            success: function(data)
            {

                console.log(data);
                $("#facilities").append(data);
            }
        });


    }
</script>
{{--@include('partials.totalproperties')--}}

@include('partials.footer')
@include('include.foot')
