<div class="title">
    <div class="left">
        <h1>{{ucfirst($data[0]->title)}}</h1>

        @if($data[0]->society->society_name == "Other")
            <h3><a href="#">{{$data[0]->block->block_name}}</a> - <a href="#">{{$data[0]->phase->phase_name}}</a> - <a href="#">{{$data[0]->society_name}}</a> - <a href="#">{{$data[0]->city_name}}</a>(63 properties)</h3>
        @else
            <h3><a href="#">{{$data[0]->address}}</a>(63 properties)</h3>
        @endif

    </div>

    <div class="right">
        <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a>


        @include('user.property.phone_detail')


    </div>
</div>



<!--end title-->
<section id="gallery">
    <div class="gallery-detail">
        <div class="ribbon"><div class="offer-number">{{$data[0]->purpose}}</div></div>

        <div class="one-item-carousel">

            @foreach($data[0]->photo as $photo)
                <div class="image">
                    <img class="img-responsive" width=500; height=500; src="{{ asset($photo->path)  }}" alt="">
                </div>
            @endforeach


        </div>
    </div>
</section>