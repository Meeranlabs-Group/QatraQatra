
    <div class="sidebar">
        <div class="box filter">
            <h2>Search</h2>

            {!! Form::open(['url' => '/search','class'=>'labels-uppercase','id'=>'form-filter']) !!}

            <div class="form-group">
                <label for="purpose">Purpose</label>
                {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                <select class="form-control" name="purpose" id="purpose" class="form-control">
                    <option value="">Select</option>
                    <option value="Sale">Sale</option>

                    <option value="Rent">Rent</option>
                </select>
            </div>

            <div class="form-group">
                <label for="form-filter-check-in">City</label>
                {{--<input type="text" class="form-control date" id="form
                -filter-check-in" name="check-in" placeholder="Check In">--}}

                <select name="city" id="city" class="form-control" >
                    <option value="">Select</option>
               @foreach($cites as $city)
                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="form-filter-check-in">Society</label>
                {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                <select name="society" id="society" class="form-control">
                    <option value="">Select</option>
                {{--@foreach($societies as $society)--}}
                    {{--<option value="{{ $society->id }}">{{ $society->society_name }}</option>--}}
                    {{--@endforeach--}}

                </select>
            </div>

                <!--end form-group-->

            <div class="row">
                <div class="form-group">

                    <div class="col-md-12">
                        <label for="Phase">Phase</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select  name="Phase" id="Phase" class="form-control">

                        {{--@foreach($phases as $phase)--}}
                            {{--<option value="{{ $phase->id }}">{{ $phase->phase_name }}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>


                    <div class="col-md-12">
                        <label for="block">Block</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select name="block" id="block" class="form-control">
                            {{--@foreach($blocks as $block)--}}
                                {{--<option value="{{ $block->id }}">{{ $block->block_name }}</option>--}}
                             {{--@endforeach--}}
                        </select>
                    </div>



                </div>
                <!--end form-group-->
            </div>

                <div class="row">
                    <div class="form-group">

                        <div class="col-md-6">
                        <label for="area">Land Area</label>
                        {{--<input type="text" class="form-control date" id="form-filter-check-in" name="check-in" placeholder="Check In">--}}
                        <select name="area" id="area" class="form-control">
                            <option value="">Select Unit</option>
                            <option value="Square_Feet">Square Feet</option>
                            <option value="Square_Yards">Square Yards</option>
                            <option value="Square_Meters">Square Meters</option>
                            <option value="Marla">Marla</option>
                            <option value="Kanal">Kanal</option>
                        </select>
                        </div>
                        <div class="col-md-6">
                            <label for="size">Size</label>
                            <input type="number" class="form-control" id="size" name="size">
                    </div>
                    </div>
                </div>

        




                <!--end form-group-inline-->



                <div class="center">
                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Advanced Search<i class="fa fa-plus"></i></a>
                </div>
                <div class="collapse" id="filter-advanced-search">
                    <div class="wrapper">
                        <!--end section-->
                        <section>
                            <h3>Property Type </h3>
                            <ul class="checkboxes">
                                @foreach($sidesearch as $count)
                                    <li><label><input type="checkbox" name="{{$count->property_type}}" value="{{$count->property_type}}">{{$count->property_type}}<span>{{$count->count}}</span></label></li>
                                @endforeach


                            </ul>
                        </section>
                        <!--end section-->
                        {{--<section>--}}
                            {{--<h3>Property Facility</h3>--}}
                            {{--<ul class="checkboxes no-bottom-margin">--}}
                                {{--<li><label><input type="checkbox" name="wi-fi">Wi-fi<span>12</span></label></li>--}}
                                {{--<li><label><input type="checkbox" name="free-parking">Free Parking<span>48</span></label></li>--}}
                                {{--<li><label><input type="checkbox" name="airport">Airport Shuttle<span>36</span></label></li>--}}
                                {{--<li><label><input type="checkbox" name="family-rooms">Family Rooms<span>56</span></label></li>--}}
                            {{--</ul>--}}
                            {{--<!--end checkboxes-->--}}
                        {{--</section>--}}
                        <!--end section-->
                    </div>
                    <!--end filter-advanced-search-->
                </div>
                <!--end collapse-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary btn-rounded form-control">Search</button>
                </div>
        {!! Form::close() !!}

        </div>
        <a href="#" class="advertising-banner">
            <span class="banner-badge">Advertising</span>
            <img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">
        </a>
    </div>
    <!--end sidebar-->