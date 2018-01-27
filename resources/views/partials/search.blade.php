<div id="page-content">
    <div class="hero-section" data-height="600">
        {!! Form::open(['url' => '/search1','class'=>'labels-uppercase','id'=>'form-filter']) !!}
            <div class="hero-inner">
                <div class="hero-wrapper" >
                    <div class="caption">
                        <div class="inner">
                            <div class="container">
                                <h1 class="center">Find Your Best Property</h1>



                                <div class="row no-gutters">



                                <input type="hidden" name="purpose"id="p" value="Sale"></input>
                                    <div class="col-md-2 col-sm-2 col-md-offset-3 col-sm-offset-3">
                                        <div class="form-group">
                                            <button  type="button" id="show" value="Sale"  class="btn">BUY</button>

                                            {{--<input  value="hello" name="type1"  id="type">--}}

                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <button  onclick="location.href='{{ url("/addproperty") }}';"  class="btn btn-primary submit">SELL</button>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <button type="button" id="show1" value="Rent" class="btn ">RENT</button>
                                        </div>
                                    </div>



                                </div>


                                <div class="row no-gutters">
                                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 search-bar" id="0">
                                        <div class="col-md-4 col-sm-6 ">
                                            <div class="form-group">
                                                <label style="color: white" >Property Type</label>

                                                <select class="form-control framed white selectpicker"  name="property_type" id="property_type" data-live-search="true">

                                                    <option value="">  Any Type  </option>
                                                    <option value="" disabled>  --- HOUSE --- </option>
                                                    <option value="Houses">  Houses</option>
                                                    <option value="Flates">  Flates</option>
                                                    <option value="Upper-Portions">  Upper Portions</option>
                                                    <option value="Lower-Portions">  Lower Portions</option>
                                                    <option value="Farms-House">  Farms House</option>
                                                    <option value="Rooms">  Rooms</option>

                                                    <option value="" disabled>  --- PLOTS ---</option>
                                                    <option value="Residential-Plots">  Residential Plots</option>
                                                    <option value="Commercial-Plots">  Commercial Plots</option>
                                                    <option value="Agricultural-Land">  Agricultural Land</option>
                                                    <option value="Industrial-Land">  Industrial Land</option>
                                                    <option value="Plot-Files">  Plot Files</option>
                                                    <option value="Plot-Forms">  Plot Forms</option>

                                                    <option value="" disabled>  --- COMMERCIAL ---</option>
                                                    <option value="Offices">  Offices</option>
                                                    <option value="Shops">  Shops</option>
                                                    <option value="Warehouses">  Warehouses</option>
                                                    <option value="Factories">  Factories</option>
                                                    <option value="Buildings">  Buildings</option>
                                                    <option value="Other">  Other</option>

                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label style="color: white" for="city">City</label>
                                                <select class="form-control framed white" name="city" id="city">
                                                    <option value="" selected>Select City</option>

                                                    @foreach($cities as $city)
                                                        <option value="{{$city->id}}">{{ $city->city_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>


                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label style="color: white" for="">Society</label>
                                                <select class="form-control framed white" id="society" name="society">
                                                    <option value="" selected>Select Society</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>






                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label style="color: white" for="">Phase</label>
                                                <select class="form-control framed white" name="phase" id="Phase">
                                                    <option value="" selected>Select Phase</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
 <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label style="color: white" for="">BLock</label>
                                                <select class="form-control framed white" name="block" id="block">
                                                    <option value="" selected>Select Block</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

										
										
										
											<div class="col-md-4 col-sm-6">
										 <div class="form-group">
                <label style="color: white;">Address</label>
                <input style="background-color:#eeeeee;" type="text"  id="address-autocomplete" name="address" placeholder=" Address" >
            </div>
										</div>	
										
										
                                          <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
												<label style="color: white;">Price</label>
												<input  style="background-color:#eeeeee;" type="number" name="pfrom" placeholder="From"/>
                                            </div>
                                            <!--end form-group-->
											 
                                           
                                               
                                                
                                            
                                            <!--end form-group-->
                                      
											   </div>
											  
											   
										
										  <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
												<label style="color: white;">Price </label>
												 <input  style="background-color:#eeeeee;" type="number" name="pto" placeholder="To" />
                                            </div>
                                            <!--end form-group-->
											 
                                           
                                               
                                                
                                            
                                            <!--end form-group-->
                                      
											   </div>
                                               
											
										
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <label style="color: white">Property Size Unit</label>
                                                <select name="unit_type" class="form-control framed white">

                                                    <option value="">Size Unit Type</option>
                                                    <option value="Marla">Marla</option>
                                                    <option value="Kanal">Kanal</option>
                                                    <option value="Square Feet">Square Feet</option>
                                                    <option value="Square Meter">Square Meter</option>
                                                    <option value="Square Yard">Square Yard</option>

                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <div class="col-md-2 col-sm-3">
                                            <div class="form-group">
												<label style="color: white;">Size</label>
                                                <input  style="background-color:#eeeeee;" type="number" name="sfrom" placeholder="From">

                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-2 col-sm-3 ">
                                            <div class="form-group">
                                                <label style="color: white;">Size</label>
                                                <input  style="background-color:#eeeeee;" type="number" name="sto" placeholder="To">

                                            </div>
                                            <!--end form-group-->
                                        </div>



                                           
											  
                                       


                                      
                                       
                                        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                                            <button type="submit" class="btn btn-rounded margin-btn" >Search</button>
                                        </div>


                                    </div>








                                </div>
                            {!! Form::close() !!}
                                <!--end favorite-searches-->
                            </div>
                            <!--end container-->
                            <div class="bg-transfer"><img src={{ asset('assets/img/sample.jpg') }} alt="abc"></div>
                            <!--end bg-transfer-->
                        </div>
                        <!--end inner-->
                    </div>
                    <!--end caption-->
                    <div class="options">


                        <a href="/MarketAnalysis"><h3 class="text-center " style="color: white;">Market Analysis</h3></a>


                        <!--end row-->
                    </div>


                </div>
                <!--end hero-wrapper-->
            </div>
            <!--end hero-inner-->

            <!--end plate-->

        <!--end form-->
    </div>


    <div id="nt-title-container">
        <ul id="nt-title">



            @foreach($articles as $article)
              <li>
                <a href="MarketDetail/{{ $article->slug }}">{{ $article->title }}</a>
            </li>
                @endforeach
        </ul>
    </div>



</div>



