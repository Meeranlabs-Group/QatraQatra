<div class="item list" >
    <div class="image-wrapper">


        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Like This Property"><i class="fa fa-thumbs-up"></i>
        </div>


        <div class="image">
            <a href="{{ URL::to('/') . '/propertydetail/' . $data->slug }}" class="wrapper">


                <div class="gallery">

                    {{--@foreach($photos as $photo)--}}
                        {{--@if($photo->property_id == $data->id )--}}
                            {{--<img src="{{ asset($photo->path)  }}" style="width:250px;height: 200px;"  alt="">--}}
                        {{--@endif--}}
                    {{--@endforeach--}}

                        @foreach($data->photo as $photo)
                                <img src="{{asset($photo->path)}}" style="width:250px;height: 200px;"  alt="">
                        @endforeach

                </div>
            </a>
            <div class="map-item">
                <button class="btn btn-close"><i class="fa fa-close"></i></button>
                <div class="map-wrapper"></div>
            </div>
            <!--end map-item-->
            <div class="owl-navigation"></div>
            <!--end owl-navigation-->
        </div>
    </div>
    <!--end image-->
    <div class="description">
		@if($data->property_type=="Houses"||$data->property_type=="Flates" ||$data->property_type=="Upper-Portions"
		 ||$data->property_type=="Lower-Portions"  ||$data->property_type=="Farms-House")
		
        <div class="meta">
            <span><i class="fa fa-bed"></i>{{ $data->feature->number_of_bedrooms }}</span>
            <span><i class="fa fa-bath"></i>{{ $data->feature->number_of_bathrooms }}</span>
        </div>
		
		@endif
        <!--end meta-->
        <div class="info">



            {{--<a href=" /propertydetail/{{ $data->id }} " ><h3> {{  str_limit( ucfirst($data->title), $limit = 30, $end = '...')  }} </h3></a>--}}
            <a href="{{ URL::to('/') . '/propertydetail/' . $data->slug }}" ><h3> {{  str_limit( ucfirst($data->title), $limit = 30, $end = '...')  }} </h3></a>
            {{----}}



            @if($data->society->society_name == 'Other')
                <figure class="location">{{ $data->address }}</figure>
            @else
                <figure class="location">{{ $data->block->block_name }}, {{ $data->phase->phase_name }}, {{ $data->society->society_name }}, {{ $data->city->city_name }}</figure>
            @endif

            <figure class="label label-InProcess">{{ $data->purpose }}</figure>
            <figure class="label label-primary">{{ $data->property_type }}</figure>
            <figure class="label label-success">{{$data->unit_size}} {{$data->unit_type}}</figure>
            <h6 class="label label-danger">PKR-{{ nice_number($data->price) }}</h6>

            @if($data->status == 1)
                <figure class="label label-Available">Available</figure>
            @endif

            @if($data->status == 2)
                <figure class="label label-InProcess">In-Process</figure>
            @endif

            @if($data->status == 3)
                <figure class="label label-danger">Sold</figure>
            @endif



            <p>
                {{ $data->description }}
            </p>
            <div class="price-info">Price:<span class="price">PKR- {{ number_format($data->price) }}/-</span>
               
				
				
				 @if( $data->purpose=="Rent" )
				@if( $data->property_type == "Houses" || $data->property_type == "Flates" || $data->property_type == "Upper-Portions" || $data->property_type == "Lower-Portions" || $data->property_type == "Farms-House" || $data->property_type == "Rooms" )
               <span class="price call"><i class="fa fa-phone"></i> 0302-8444701</span>
            @endif
			@endif
			
			
			 @if( $data->purpose=="Rent" )
				@if( $data->property_type == "Residential-Plots" || $data->property_type == "Commerical-Plots" || $data->property_type == "Agricultural-Land" || $data->property_type == "Industrial-Land" || $data->property_type == "Offices" || $data->property_type == "Shops" || $data->property_type == "Warehouses" || $data->property_type == "Factories" ||  $data->property_type == "Buildings" || $data->property_type == "Other" )
             <span class="price call"><i class="fa fa-phone"></i> 0302-8444701</span>
            @endif
			@endif
		
		 @if( $data->purpose=="Sale" )
				@if( $data->property_type == "Commerical-Plots" || $data->property_type == "Agricultural-Land" || $data->property_type == "Industrial-Land" || $data->property_type == "Offices" || $data->property_type == "Shops" || $data->property_type == "Warehouses" || $data->property_type == "Factories" ||  $data->property_type == "Buildings" || $data->property_type == "Other" )
                <span class="price call"><i class="fa fa-phone"></i> 0302-8444706</span>
            @endif
			@endif
		
		
		
		 @if( $data->purpose=="Sale" )
				@if( $data->property_type == "Residential-Plots" || $data->property_type == "Plot-Files" ||$data->property_type == "Plot-Forms" )
                <span class="price call"><i class="fa fa-phone"></i> 0302-8444781</span>
            @endif
			@endif
		
			
			
 @if( $data->purpose=="Sale" )
            @if( $data->property_type == "Houses" || $data->property_type == "Flates" || $data->property_type == "Upper-Portions" || $data->property_type == "Lower-Portions" || $data->property_type == "Farms-House" || $data->property_type == "Rooms" )
               <span class="price call"><i class="fa fa-phone"></i>0302-8444703</span>
            @endif
		@endif

	</div>
				

            <a href="{{ URL::to('/').'/propertydetail/'.$data->slug }}"  class="btn btn-rounded btn-small btn-default btn-framed" >View detail</a>
        </div>
        <!--end info-->
    </div>
    <!--end description-->
</div>
<!--end item-->