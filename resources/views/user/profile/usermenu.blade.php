
<div class="sidebar">
    <div class="box filter">


        <h2 class="center">User Menu</h2>
        <ul class="checkboxes">
            <li><label><a name="hotel" href="/profile"><h3>Edit Profile</h3></a></label></li>
        </ul>




        <div  id="filter-advanced-search">
        <div class="wrapper">

            <!--end section-->
            <section>
                <h2>My Properties</h2><hr>
                <ul class="checkboxes">



                    <li><label><a href="/userrent"><h3>Rent<span>{{ $result[1] }}</span></h3></a></label></li>
                    <li><label><a href="/usersale"><h3>Sale<span>{{ $result[0]}}</span></h3></a></label></li>
                    <li><label><a href="/deleted"><h3>Deleted<span>{{ $result[5]}}</span></h3></a></label></li>
                    <li><label><a href="/addproperty"><h3>Add Property</h3></a></label></li>
                </ul>


                <!--end checkboxes-->
            </section>
            <!--end section-->
            <section>
                <h2>My Articles</h2><hr>
                <ul class="checkboxes">
                    <li><label><a href="/addarticle"><h3>Add Article</h3></a></label></li>
                    <li><label><a href="/approved"><h3>Approved<span>{{ $result[2] }}</span></h3></a></label></li>
                    <li><label><a href="/disapproved"><h3>Disapproved<span>{{ $result[3] }}</span></h3></a></label></li>
                    <li><label><a href="/myarticles"><h3>All Articles<span>{{ $result[4] }}</span></h3></a></label></li>
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