<section id="location">
    <div class="row">
        <div class="title">
            <h2>Location</h2>
            <aside class="step">2</aside>
        </div>
        <div class="col-md-7">


            <div class="col-md-6 " style="padding: 0px;">
                <div class="form-group">
                    <label for="address-autocomplete">City<em>*</em></label>
                    <select class="framed width-100" name="city" id="city">


                        <option selected value="{{ $feature[0] -> city_id }}">{{ $feature[0]->city_name }}</option>
                        <option value="" disabled="">Select City</option>

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
                        <option selected value="{{ $feature[0]->society_id }}">{{ $feature[0]->society_name }}</option>
                        <option value="" disabled="">->Select Society</option>
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
                        <option selected value="{{ $feature[0]->phase_id}}">{{ $feature[0]->phase_name}}</option>
                        <option value="" disabled="">->Select Phase</option>

                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" style="padding: 0px;">
                <div class="form-group">
                    <label for="address-autocomplete">Block</label>
                    <select class="framed width-100" name="block" id="block">
                        <option selected value="{{ $feature[0]->block_id }}">{{ $feature[0]->block_name}}</option>
                        <option value="" disabled="">->Select Block</option>

                    </select>
                </div>

            </div>
            <div class="col-md-6 col-sm-6" style="padding: 0px;">
                <div class="col-md-6" style="padding: 0px;">
                    <div class="form-group">
                        <label for="address-autocomplete">Address<em>*</em></label>
                        <input type="text" class="form-control" id="address-autocomplete" name="address" value="{{ $feature[0]->address }}" required="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>