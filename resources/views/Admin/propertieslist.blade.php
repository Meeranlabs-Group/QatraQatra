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
                                {{--<th>Featured</th>--}}
                                <th>Property Status</th>
                                <th>Superhot</th>
                                <th>Hot</th>
                                <th>Remove Request</th>
                                <th>Contact Number</th>
                                <th>Update</th>
                                {{--<th>Total</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user as $property)

                                <tr class="my-item">
                                    <td>
                                        <div class="image-wrapper">
                                            {{--/{{ $property->id }}--}}
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
                                            {{----}}
                                            <a href="/propertydetail/{{$property->slug}}"><h2>{{ str_limit(ucfirst($property->title) , $limit = 45, $end = '...') }}</h2></a>

                                            <figure class="location">{{ $property->city }}</figure>

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
                                    {{--<td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>--}}
                                    <td class="views">
                                        <select name="" id="">
                                            <option value=""></option>
                                        </select>    
                                    </td>
                                    {{--<td class="views">{{ $property->ad_status }}</td>--}}
                                    <td class="reviews">{{ $property->superhot }}</td>
                                    <td class="rating">{{ $property->hot }}</td>
                                    <td class="rating">
                                        <a href="/deleteproperty/{{$property->slug}}" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                    </td>

                                    <td class="last-reservation">

                                        <div >


                                            {{--<a href="/editproperty/{{$property->id}}" class="link icon"><i class="fa fa-edit"></i>Edit</a>--}}
                                            <input type="tel" name="ContactNumber"> </input>


                                        </div>
                                        <!--end edit-options-->
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                </tr>


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







            {{--<div class="center">--}}
                {{--{{$user->render()}}--}}
            {{--</div>--}}
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@include('partials.footer')
@include('include.foot')