
<div class="sidebar">
    <div class="box filter">


        <h2 class="center">Admin Menu</h2>
        <ul class="checkboxes">
            <li><label><a href=""><h3>Edit Profile</h3></a></label></li>
        </ul>




        <div  id="filter-advanced-search">
            <div class="wrapper">

                <!--end section-->
                <section>
                    <h2>Users</h2><hr>
                    <ul class="checkboxes">

                        <li><label><a href=" "><h3>Individual<span>67</span></h3></a></label></li>


                        <li><label><a href=" "><h3>Individual<span>67</span></h3></a></label></li>
                        <li><label><a name="hotel"><h3>Agent<span>67</span></h3></a></label></li>
                        {{--<li><label><a name="hotel"><h3>Employee<span>67</span></h3></a></label></li>--}}
                        {{--<li><label><a name="hotel"><h3>Add Property</h3></a></label></li>--}}
                    </ul>


                    <!--end checkboxes-->
                </section>


                <section>
                    <h2>Pending Properties</h2><hr>
                    <ul class="checkboxes">
                        <li><label><a href="/pendingRent"><h3>Rent<span>{{ $result[3] }}</span></h3></a></label></li>
                        <li><label><a href="/pendingSale"><h3>Sale<span>{{ $result[2] }}</span></h3></a></label></li>
                        {{--<li><label><a name="hotel"><h3>Deleted<span>67</span></h3></a></label></li>--}}
                        {{--<li><label><a name="hotel"><h3>Add Property</h3></a></label></li>--}}
                    </ul>


                    <!--end checkboxes-->
                </section>

                <section>
                    <h2>Old Properties</h2><hr>
                    <ul class="checkboxes">
                        <li><label><a href="/oldRent"><h3>Rent<span>{{ $result[1] }}</span></h3></a></label></li>
                        <li><label><a href="/oldSale"><h3>Sale<span>{{ $result[0] }}</span></h3></a></label></li>
                        {{--<li><label><a name="hotel"><h3>Deleted<span>67</span></h3></a></label></li>--}}
                        {{--<li><label><a name="hotel"><h3>Add Property</h3></a></label></li>--}}
                    </ul>


                    <!--end checkboxes-->
                </section>
                <!--end section-->
                <section>
                    <h2>My Articles</h2><hr>
                    <ul class="checkboxes">
                        <li><label><a name="hotel"><h3>Add Article</h3></a></label></li>
                        <li><label><a name="hotel"><h3>Aproved<span>67</span></h3></a></label></li>
                        <li><label><a name="hotel"><h3>Disaproved<span>67</span></h3></a></label></li>
                        <li><label><a name="hotel"><h3>All Articles<span>67</span></h3></a></label></li>
                    </ul>


                    <!--end checkboxes-->
                </section>
                <!--end section-->
            </div>
            <!--end filter-advanced-search-->
        </div>

    </div>

    <a href="#" class="advertising-banner">
        <span class="banner-badge">Advertising</span>
        <img src="{{ asset("assets/img/ad-banner-02.jpg") }}" alt="">
    </a>
</div>
<!--end sidebar-->