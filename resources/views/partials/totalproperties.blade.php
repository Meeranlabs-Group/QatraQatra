


<div class="block">
    <div class="container">
        <div class="title">
            <h2 class="center">Available Properties</h2>
        </div>
        <!--end title-->


        <ul class="list-links">


            @foreach($Property1 as $property)

                <li><a href="/houses/{{ str_slug($property->city_name) }}/{{ $property->city_id }}">{{ str_slug($property->city_name) }}<span>{{ $property->total }}</span></a></li>

            @endforeach



        </ul>
        <!--end list-links-->
    </div>
    <!--end container-->
</div>