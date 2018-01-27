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

                {{--<h1><a href="profile">Profile</a></h1>--}}
            </div>
            <!--end title-->
            <div class="row">
                <div class="col-md-9">



                    {!! Form::open(['url' => '/savearticle', 'id'=>'form-profile','class'=>'labels-uppercase','files'=>'true', 'enctype'=>'multipart/form-data']) !!}

                    <div class="row">
                        <!--Profile Picture-->
                        <div class="col-md-3 col-sm-3">
                            <section>
                                <h3>Blog Picture</h3>
                                <div id="profile-picture" class="profile-picture single-file-preview">


                                    <img src={{ asset("assets/img/person-01.jpg") }} alt="" class="image">

                                    {{--<img src="{{$data->path}}" alt="{{$data->name}}" class="image">--}}



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
                                <h3>Write Article</h3>

                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <!--end form-group-->

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                           <textarea class="form-control" id="description" name="description" rows="10" required></textarea>

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

                <!-- end col-md-3-->
            </div>
        </div>
        <!--end main-content-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->



@include('partials.footer')
@include('include.foot')