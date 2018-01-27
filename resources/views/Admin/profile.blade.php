@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Detail</li>
        </ol>
        <!--end breadcrumb-->
        <div class="main-content">
            <div class="title">
                {{--<h1 class="inactive"><a href="my-accommodations.html">My Accommodations</a></h1>--}}

                <h1><a href="profile">Profile</a></h1>
            </div>


            <!--end title-->
            <div class="row">
                <div class="col-md-3 ">
                    @include('Admin.adminmenu')
                </div>

                <div class="col-md-9">



                    {!! Form::open(['url' => '/profile', 'id'=>'form-profile','class'=>'labels-uppercase','files'=>'true', 'enctype'=>'multipart/form-data']) !!}

                    <div class="row">
                        <!--Profile Picture-->
                        <div class="col-md-3 col-sm-3">
                            <section>
                                <h3>Profile Picture</h3>
                                <div id="profile-picture" class="profile-picture single-file-preview">

                                    {{--<input type="hidden" value="{{$data->path}}" name="path">--}}
                                    <img src={{ asset("assets/img/user logo.png") }} class="image">

                                    <div class="input">
                                        <input name="file" type="file" class="">
                                        <span>Click to upload a picture</span>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!--end col-md-3-->

                        <!--Contact Info-->
                        <div class="col-md-9 col-sm-9">
                            <section>
                                <h3>Personal Info</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" >
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" >
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" name="number" pattern="\d*">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->

                                    <!--end col-md-3-->
                                </div>
                            </section>
                            <section>
                                <h3>Address</h3>

                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city" >
                                </div>
                                <!--end form-group-->
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="street">Address</label>
                                            <input type="text" class="form-control" id="street" name="address" >
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="zip">ZIP</label>
                                            <input type="text" class="form-control" id="zip" name="zip" pattern="\d*">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                </div>
                                <!--end col-md-3-->

                                <!--end form-group-->
                            </section>

                            <div class="form-group">
                                <button type="submit" class="btn btn-large btn-primary btn-rounded" id="submit">Save Changes</button>
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!--end col-md-6-->
                    </div>


                    {!! Form::close() !!}


                </div>

                <!--Password-->
                <div class="col-md-3 col-sm-9">


                    {!! Form::open(['url' => '/updatepassword', 'id'=>'form-password','class'=>'labels-uppercase']) !!}





                    <h3>Password Change</h3>
                    <div class="form-group">
                        <label for="current-password">Current Password</label>
                        <input type="password" class="form-control" id="current-password" name="current_password">
                    </div>



                    <!--end form-group-->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="new-password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <!--end form-group-->



                    <div class="form-group">
                        <label for="confirm-new-password">Confirm New Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                    </div>

                    <!--end form-group-->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-rounded btn-framed">Change Password</button>
                    </div>
                    <!-- end form-group -->

                    {!! Form::close() !!}
                </div>
                <!-- end col-md-3-->
            </div>
        </div>
        <!--end main-content-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->


{{--<div class="form-group">--}}
{{--<label for="confirm-new-password">Confirm New Password</label>--}}
{{--<textarea name="editor1"></textarea>--}}
{{--</div>--}}
</div>


@include('partials.footer')
@include('include.foot')