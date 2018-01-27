@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
    {{--@include('partials.bread_crum_detail')--}}
    <!--end breadcrumb-->
        <div class="main-content">
            <div class="title">
                {{--<h1><a href="my-accommodations.html">My Accommodations</a></h1>--}}
                <h1 class="inactive"><a href="/profile">{{ Auth::user()->name }}</a></h1>
            </div>

            <div class="row">
                <div class="col-md-3 ">
                    @include('user.profile.usermenu')
                </div>


                <div class="col-md-9">

                    <div class="my-items table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Properties</th>
                                {{--<th>Featured</th>--}}
                                <th>Likes</th>
                                <th>Views</th>
                                <th>Status</th>
                                <th>Edit/Delete Property</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $property)

                                <tr class="my-item">
                                    <td>
                                        <div class="image-wrapper">
                                            {{--<div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>--}}
                                            <a href="propertydetail/{{ $property->slug }}" class="image">
                                                <div class="bg-transfer">


                                                    @foreach($photos as $photo)
                                                        @if( $photo->property_id == $property->id  && $photo->rank==1)
                                                            <img src="{{asset($photo->path)}}" class="image">
                                                        @endif
                                                    @endforeach


                                                </div>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="propertydetail/{{ $property->slug }}"><h2>{{$property->title}}</h2></a>
                                            <figure class="location">{{$property->block_name }}</figure>
                                            <figure class="label label-info">{{$property->property_type}}</figure>
                                            <div class="meta">
                                                <span><i class="fa fa-bed"></i>{{$property->number_of_bedrooms}}</span>
                                                <span class="price-info">Price: <span class="price">{{$property->price}}</span></span>
                                            </div>
                                            <!--end meta-->
                                        </div>
                                        <!--end info-->
                                    </td>
                                    {{--<td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>--}}
                                    <td class="views">426</td>
                                    <td class="reviews">45</td>
                                    <td class="rating">
                                        @if($property->ad_status==0)
                                            <h1 class="label label-warning">Pending</h1>

                                        @elseif($property->ad_status==1)
                                            <h1 class="label label-success">Approved</h1>
                                        @else
                                            <h1 class="label label-danger">Deleted</h1>
                                        @endif

                                    </td>

                                    <td class="last-reservation">

                                        <div >
                                            @if($property->ad_status==2)
                                                {{--profile controller--}}
                                                <a href="/updatePropertyStatus/{{$property->slug}}">Send for Approve</a>

                                            @else
                                                <a href="/editproperty/{{$property->slug}}" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                                <a href="/deleteproperty/{{$property->slug}}" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                            @endif

                                        </div>
                                        <!--end edit-options-->
                                    </td>
                                </tr>


                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!--end my-items-->
                </div>
            </div>






            <div class="center">
            {{ $data->render() }}
            <!-- end pagination-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@include('partials.footer')
@include('include.foot')