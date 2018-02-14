@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Listing</li>
            <li ><a href="{{ url("/properties")}}">Properties</a></li>
            {{--<li class="active">Detail</li>--}}

        </ol>
        <!--end breadcrumb-->
        <div class="main-content">
            <div class="title">
                {{--<h1 class="inactive"><a href="/profile">Name</a></h1>--}}
            </div>

            <div class="row">
                <div class="col-md-3 ">
                    @include('admin.adminmenu')
                </div>


                <div class="col-md-9">

                    <div class="my-items table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Properties</th>
                                <th>Property Status</th>
                                <th>Superhot</th>
                                <th>Remove Request</th>
                                <th>Contact Number</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($user as $property)
                                {!! Form::open(['url' => '/statusUpdate']) !!}

                                <tr class="my-item">
                                    <td>
                                        <div class="image-wrapper">
                                            <a href="/propertydetail/{{$property->slug}}" class="image">
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
                                            <a href="/propertydetail/{{$property->slug}}"><h2>{{ str_limit(ucfirst($property->title) , $limit = 45, $end = '...') }}</h2></a>

                                            <figure class="location">{{ $property->address }}</figure>

                                            <figure class="label label-info">{{ $property->property_type }}</figure>
                                            <figure class="label label-info">{{ $property->user->name }}</figure>
                                            <div class="meta">
                                                <span><i class="fa fa-bed"></i>365</span>
                                                <span class="price-info">Price: <span class="price">{{ $property->price }}</span></span>
                                            </div>
                                            <!--end meta-->
                                        </div>
                                        <!--end info-->
                                    </td>


                                    <td class="views">
                                        <select name="ad_status" class="form-control" >

                                            @if($property->ad_status == 0)
                                                <option value="0" selected><p style="color: #6c0d09">Pending</p></option>

                                            @elseif($property->ad_status == 1)
                                                    <option value="1" selected>Approve</option>

                                            @endif

                                                @if($property->ad_status != 0)
                                                    <option value="0">Pending</option>

                                                @endif
                                                @if($property->ad_status != 1)
                                                    <option value="1">Approve</option>
                                                @endif
                                        </select>
                                    </td>
                                    {{--<td class="views">{{ $property->ad_status }}</td>--}}
                                    {{--<td class="reviews">{{ $property->superhot }}</td>--}}
                                    <td class="reviews">

                                        <select name="superhot" class="form-control">

                                            @if($property->superhot== 0)
                                                <option value="0" selected>Make Super Hot</option>

                                            @elseif($property->superhot== 1)
                                                <option value="1" selected>Remove</option>

                                            @endif

                                            @if($property->superhot != 0)
                                                <option value="0">Make Super Hot</option>

                                            @endif
                                            @if($property->superhot != 1)
                                                <option value="1">Remove</option>
                                            @endif
                                        </select>


                                    </td>
                                    {{--<td class="rating">{{ $property->hot }}</td>--}}
                                    <td class="rating">
                                        <a href="/deleteproperty/{{$property->slug}}" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                    </td>

                                    <td class="last-reservation">

                                        <div >


                                            {{--<a href="/editproperty/{{$property->id}}" class="link icon"><i class="fa fa-edit"></i>Edit</a>--}}
                                            <input type="tel" name="phone_number"> </input>


                                        </div>
                                        <!--end edit-options-->
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                </tr>


                                {!! Form::close() !!}


                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!--end my-items-->
                </div>




                <div class="center">
                    {{$user->render()}}
                </div>
            </div>


            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
</div>
@include('partials.footer')
@include('include.foot')