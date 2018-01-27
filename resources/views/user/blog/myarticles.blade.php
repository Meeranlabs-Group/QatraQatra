@include('include.head')
@include('partials.navbar')



<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Detail</li>
        </ol>
        <!--end breadcrumb-->
        <div class="main-content">
            <div class="title">
                {{--<h1><a href="my-accommodations.html">My Accommodations</a></h1>--}}
                <h1 class="inactive"><a href="/addarticle">Add Article</a></h1>
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
                                <th>Articles</th>
                                {{--<th>Featured</th>--}}
                                <th>Likes</th>
                                <th>Views</th>

                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                            {{--<iframe--}}
                            {{--class="embed-responsive-item"--}}
                            {{--src="https://www.vieweet.com/iframe/PLXSQBK?ui=iframe" width="300"--}}
                            {{--height="150"></iframe></div>--}}


                            @foreach($articles as $article)

                                <tr class="my-item">
                                    <td>
                                        <div class="image-wrapper">
                                            {{--<div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>--}}
                                            <a href="/MarketDetail/{{ $article->slug }}" class="image">
                                                <div class="bg-transfer">
                                                    <img src="{{$article->path}}" alt="{{$article->title}}" class="image">
                                                </div>
                                            </a>



                                        </div>
                                        <div class="info">

                                            {{--propertydetail/{{ $property->id }}--}}
                                            <a href="/MarketDetail/{{ $article->slug }}"><h2>{{ $article->title  }}</h2></a>

                                            <figure class="location">{{ str_limit($article->description , $limit = 50, $end = '...') }} </figure>
                                            <figure class="label label-info">Type</figure>
                                            <div class="meta">
                                                <span><i class="fa fa-bed"></i>36555</span>
                                                <span class="price-info">Price: <span class="price">Price</span></span>
                                            </div>
                                            <!--end meta-->
                                        </div>
                                        <!--end info-->
                                    </td>
                                    {{--<td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>--}}
                                    <td class="views">425556</td>
                                    <td class="reviews">45</td>


                                    <td class="last-reservation">

                                        <div >


                                            {{--/editproperty/{{$property->id}}--}}
                                            <a href="/editarticle/{{ $article->slug }}" class="link icon"><i class="fa fa-edit"></i>Edit</a>


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



            </div>
        </div>


        <div class="center">
        {{ $articles->render() }}
        <!-- end pagination-->
        </div>
        <!--end main-content-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@include('partials.footer')
@include('include.foot')