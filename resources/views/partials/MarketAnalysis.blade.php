@include('include.head')
@include('partials.navbar')

<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">Market Anaylysis</li>

        </ol>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-md-9">
                <div class="main-content">




                    <div class="title">
                        <h1>Market Analysis</h1>
                    </div>
                    <!--end title-->

                    @foreach($articles as $article)

                    <article class="blog-post">
                        <a href="/MarketDetail/{{$article->slug}}">
                            <img src="{{ asset($article->path)}}"></a>
                        <header><a href="/MarketDetail/{{$article->slug}}"><h2>{{ $article->title }}</h2></a></header>
                        <figure class="meta">
                            <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                            <a href="#" class="link icon"><i class="fa fa-calendar"></i>{{ $article->created_at }}4</a>
                            <div class="tags">
                                <a href="#" class="tag article">Architecture</a>
                                <a href="#" class="tag article">Design</a>
                                <a href="#" class="tag article">Trend</a>
                            </div>
                        </figure>
                        <p class="text-justify " style="font-size: large">

                            {{ str_limit(ucfirst($article->description) , $limit = 500, $end = '...') }}

                        </p>
                        <a href="/MarketDetail/{{$article->slug}}" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                    </article><!-- /.blog-post -->
                  @endforeach




                    <!-- Pagination -->
                    <div class="center">


                        {{ $articles->render() }}

                        <!-- end pagination-->
                    </div>
                    <!-- end center-->
                </div>
                <!--end main-content-->
            </div>
            <!--end col-md-9-->
            {{--<div class="col-md-3">--}}
                {{--<div class="sidebar">--}}
                    {{--<h2>Archive</h2>--}}
                    {{--<ul class="links">--}}
                        {{--<li><a href="#">January</a></li>--}}
                        {{--<li><a href="#">February</a></li>--}}
                        {{--<li><a href="#">April</a></li>--}}
                        {{--<li><a href="#">March</a></li>--}}
                        {{--<li><a href="#">July</a></li>--}}
                        {{--<li><a href="#">September</a></li>--}}
                        {{--<li><a href="#">October</a></li>--}}
                        {{--<li><a href="#">December</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!--end sidebar-->--}}
            {{--</div>--}}
            <!--end col-md-3-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>

@include('partials.footer');
@include('include.foot')