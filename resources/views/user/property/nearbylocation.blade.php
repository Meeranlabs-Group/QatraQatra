<div class="row">

    @if($data[0]->feature->nearby_schools!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Schools</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
    @if($data[0]->feature->nearby_hospitals!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Hospitals</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
    @if($data[0]->feature->nearby_shopping_malls!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Shopping Malls</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
    @if($data[0]->feature->nearby_restaurants!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Restaurants</h5>
            </div>
            <!--end feature-->
        </div>
    @endif
    @if($data[0]->feature->nearby_public_transport!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Nearby Public Transport Service</h5>
            </div>
            <!--end feature-->
        </div>
    @endif

    @if($data[0]->feature->distance_from_airport_kms!="")
        <div class="col-md-4 col-sm-4">
            <div class="feature">
                <h5><i class="icon_box-checked" style="color: #1fad83"></i>Distance From Airport <strong>{{$data[0]->distance_from_airport_kms}}</strong></h5>
            </div>
            <!--end feature-->
        </div>
    @endif

</div>

