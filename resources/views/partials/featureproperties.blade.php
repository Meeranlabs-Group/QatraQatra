<div class="block">
    <div class="container">
        <div class="title">
            <h2 class="center">Our Featured Properties</h2>
        </div>
        <!--end title-->

        <div class="gallery-carousel">

            @foreach($hot as $data)
            <div class="gallery-item">


              

                        <a href="propertydetail/{{ $data->slug}}"><div class="image"><img height="191px;width:255px;" src= "{{ $data->path }}" alt=""></div></a>
                 

                <div class="description">
                    <a href="propertydetail/{{ $data->slug }}"><h3> {{ str_limit(ucfirst($data->title) , $limit = 20, $end = '...') }}   </h3></a>
                    <figure>{{$data->society_name}},{{ $data->city_name }}</figure>

                    <figure class="label label-InProcess">{{ $data->purpose }}</figure>
                    <figure class="label label-InProcess">{{ $data->property_type }}</figure>
                    <figure class="label label-success">{{$data->unit_size}} {{$data->unit_type}}</figure>
                    <h6 class="label label-danger">PKR-{{ nice_number($data->price) }}</h6>
                    <p>  {{ str_limit($data->description , $limit = 50, $end = '...') }}  </p>
                    <a href="propertydetail/{{ $data->slug }}" class="btn btn-default btn-small btn-framed btn-rounded">More</a>
                </div>
            </div>

        @endforeach
            <!--end gallery-item-->
        </div>


        <!--end gallery-carousel-->
    </div>
    <!--end container-->

    <div class="bg opacity-30">
        <img src={{ asset("assets/img/bg-map.jpg") }} alt="">
    </div>
</div>
<!--end block-->