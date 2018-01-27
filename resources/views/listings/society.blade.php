@include('include.head')
@include('partials.navbar')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">{{$property3[0]->city_name}}</li>
        </ol>
        <!--end breadcrumb-->
        <div class="row">

            <div class="col-md-12">
                <div class="block">
                    <div class="container">
                        <div class="title">
                            <h2 class="center">Available Properties</h2>
                        </div>
                        <!--end title-->


                        <ul class="list-links">
                            @foreach($Property1 as $property)
                                <li><a href="/houses/{{ str_slug($property3[0]->city_name) }}/{{ str_slug($property->society_name) }}/{{ $x }}/{{ $property->society_id }}">{{ $property->society_name }}<span>{{$property->total}}</span></a></li>

                            @endforeach



                        </ul>
                        <!--end list-links-->
                    </div>
                    <!--end container-->
                </div>
                <!--end main-content-->
            </div>



            <div class="col-md-3">
                @include('partials.sidesearch')
            </div>
            <div class="col-md-9">
                <div class="main-content">
                    <div class="title">
                        <h1>Listing</h1>
                    </div>


                    @foreach($property3 as $data)

                        @include('partials.listingproperty')
                    @endforeach

                </div>
            </div>


        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer');
@include('include.foot');