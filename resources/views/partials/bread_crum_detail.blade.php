



<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    @if($data[0]->property_type!='')
    <li ><a href="{{ url("/properties")}}">{{ucfirst($data[0]->property_type)}}</a></li>
    @endif


    @if($data[0]->title!='')
        <li class="active">{{ucfirst($data[0]->title)}}</li>
    @endif

</ol>
