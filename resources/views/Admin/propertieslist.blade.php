@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Listing</li>
            <li ><a href="{{ url("/properties")}}">Properties</a></li>
            <li class="active">Detail</li>

        </ol>
        <!--end breadcrumb-->
        <div class="main-content">
            <div class="title">
                {{--<h1><a href="my-accommodations.html">My Accommodations</a></h1>--}}
                <h1 class="inactive"><a href="/profile">Name</a></h1>
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
                                <th>User Properties</th>
                                {{--<th>Featured</th>--}}
                                <th>Name</th>
                                <th>Type</th>
                                <th>Total</th>
                                <th>Edit/Delete Property</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user as $property)

                                <tr class="my-item">
                                    <td>
                                        <div class="image-wrapper">
                                            {{--/{{ $property->id }}--}}
                                            <a href="propertydetail" class="image">
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
                                            <a href="propertydetail/{{ $property->id }}"><h2>{{ $property->title}}</h2></a>

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
                                    <td class="views">426</td>
                                    <td class="reviews">45</td>
                                    <td class="rating">9.3</td>

                                    <td class="last-reservation">

                                        <div >

                                            {{--/--}}
                                            <a href="/editproperty/{{$property->id}}" class="link icon"><i class="fa fa-edit"></i>Edit</a>

                                            {{--/deleteproperty/{{$property->id}}--}}
                                            <a href="" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
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