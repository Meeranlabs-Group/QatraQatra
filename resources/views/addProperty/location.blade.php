<section id="location">
    <div class="row">
        <div class="title">
            <h2>Location</h2>
            <aside class="step">2</aside>
        </div>
        <div class="col-md-7 col-sm-7">

<div class="col-md-6 col-sm-6 " style="padding: 0px;">
            <div class="form-group">
                <label for="address-autocomplete">City<em>*</em></label>
                <select class="framed width-100" name="city" id="city" required>
                    <option value="" selected="">Select City</option>

                    @foreach($cities as $city)
                        <option value="{{ $city -> id }}" >{{ $city -> city_name }}</option>

                    @endforeach

                </select>
            </div>
</div>

            <div class="col-md-6 col-sm-6" style="padding: 0px;">

            <div class="form-group">
                <label for="address-autocomplete">Society</label>

                <select class="framed width-100" name="society" id="society">
                    <option value="" selected="">Select Society</option>
                {{--@foreach($societies as $society)--}}
                    {{--where ($society->city_id == ) --}}
                    {{--<option value="" selected="">{{ $society -> society_name }}</option>--}}

                    {{--@endforeach--}}

                </select></div>
            </div>


            <div class="col-md-6 col-sm-6" style="padding: 0px;">

                <div class="form-group">
                    <label for="address-autocomplete">Phase</label>
                    <select class="framed width-100" name="Phase" id="Phase">
                        <option value="" selected="">Select Phase</option>

                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="padding: 0px;">

                <div class="form-group">
                    <label for="address-autocomplete">Block</label>
                    <select class="framed width-100" name="block" id="block">
                        <option value="" selected="">Select Block</option>

                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="padding: 0px;">

            <div class="form-group">
                <label for="address-autocomplete">Address<em>*</em></label>
                <input type="text" class="form-control" id="address-autocomplete" name="address" placeholder="Accommodation Address" required>
            </div>

        <!--end map-->
            {{--<h3>Position</h3>--}}
            {{--<ul class="checkboxes inline list-unstyled">--}}
                {{--<li><label><input type="checkbox" name="corner">Corner</label></li>--}}
                {{--<li><label><input type="checkbox" name="near_to_park">Near the park</label></li>--}}
                {{--<li><label><input type="checkbox" name="Near the ski center">Near to Main Road</label></li>--}}
                {{--<li><label><input type="checkbox" name="At he town center">Near to Mosque</label></li>--}}
            {{--</ul>--}}
            <!--end checkboxes-->
        </div>

        <!--end col-md-7-->

        <!--end col-md-7-->
    </div>

        <div class="col-md-5" id="xd">

            <div class="form-group">
                <label>Place on Map</label>
                <div class="map height-300 box" id="map-item"></div>
            </div>
        </div>
    </div>
    <!--end row-->
</section>




{{--<script type="text/javascript">--}}
    {{--function removeOptions(selectbox)--}}
    {{--{--}}
        {{--var i;--}}
        {{--for(i = selectbox.options.length - 1 ; i >= 0 ; i--)--}}
        {{--{--}}
            {{--selectbox.remove(i);--}}
        {{--}--}}
    {{--}--}}
    {{--//using the function:--}}

    {{--document.getElementById('city').onchange = function () {--}}
        {{--removeOptions(document.getElementById("society"));--}}



        {{--removeOptions(document.getElementById("block"));--}}
        {{--removeOptions(document.getElementById("Phase"));--}}

        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}
        {{--var e = document.getElementById("city");--}}
        {{--var value = e.options[e.selectedIndex].value;--}}
        {{--if(value){--}}


            {{--removeOptions(document.getElementById("society"));--}}
            {{--removeOptions(document.getElementById("Phase"));--}}
            {{--removeOptions(document.getElementById("block"));--}}







            {{--$.ajax({--}}



                {{--url:'/getsocieties/' + value,--}}
                {{--type: "GET",--}}
                {{--dataType: "json",--}}
                {{--success: function(data){--}}


                    {{--for (var i = 0; i < data.length; i++) {--}}


                        {{--var option = document.createElement("option");--}}
                        {{--option.text = data[i].name;--}}
                        {{--option.value = data[i].id;--}}
                        {{--var select = document.getElementById("society");--}}
                        {{--select.append(option);--}}


                    {{--}--}}



                {{--}--}}

            {{--});--}}
        {{--}--}}











    {{--}--}}

{{--</script>--}}


{{--<script type="text/javascript">--}}

    {{--document.getElementById('society').onchange = function () {--}}

        {{--removeOptions(document.getElementById("Phase"));--}}
        {{--removeOptions(document.getElementById("block"));--}}



        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}


        {{--var s = document.getElementById("society");--}}
        {{--var value1 = s.options[s.selectedIndex].value;--}}



        {{--if(value1){--}}
            {{--removeOptions(document.getElementById("Phase"));--}}
            {{--removeOptions(document.getElementById("block"));--}}

            {{--$.ajax({--}}



                {{--url:'/getphases/' + value1,--}}
                {{--type: "GET",--}}
                {{--dataType: "json",--}}
                {{--success: function(data){--}}

                    {{--for (var i = 0; i < data.length; i++) {--}}


                        {{--var option = document.createElement("option");--}}
                        {{--option.text = data[i].name;--}}
                        {{--option.value = data[i].id;--}}
                        {{--var select = document.getElementById("Phase");--}}
                        {{--select.appendChild(option);--}}


                    {{--}--}}



                {{--}--}}

            {{--});--}}
        {{--}--}}


    {{--}--}}

{{--</script>--}}

{{--<script type="text/javascript">--}}

    {{--document.getElementById('Phase').onchange = function () {--}}



        {{--removeOptions(document.getElementById("block"));--}}

        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--}--}}
        {{--});--}}



        {{--var t = document.getElementById("Phase");--}}
        {{--var value2 = t.options[t.selectedIndex].value;--}}



        {{--if(value2){--}}


            {{--removeOptions(document.getElementById("block"));--}}

            {{--$.ajax({--}}



                {{--url:'/getblocks/' + value2,--}}
                {{--type: "GET",--}}
                {{--dataType: "json",--}}
                {{--success: function(data){--}}


                    {{--for (var i = 0; i < data.length; i++) {--}}


                        {{--var option = document.createElement("option");--}}
                        {{--option.text = data[i].name;--}}
                        {{--option.value = data[i].id;--}}
                        {{--var select = document.getElementById("block");--}}
                        {{--select.appendChild(option);--}}


                    {{--}--}}



                {{--}--}}

            {{--});--}}
        {{--}--}}



    {{--}--}}


{{--</script>--}}
