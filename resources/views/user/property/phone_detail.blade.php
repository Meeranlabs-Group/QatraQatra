	
							@if( $data[0]->purpose=="Rent" )
				@if( $data[0]->property_type == "Houses" || $data[0]->property_type == "Flates" || $data[0]->property_type == "Upper-Portions" || $data[0]->property_type == "Lower-Portions" || $data[0]->property_type == "Farms-House" || $data[0]->property_type == "Rooms" )
              
							  <a href="tel:0302-8444701" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif
			
			
			 @if( $data[0]->purpose=="Rent" )
				@if( $data[0]->property_type == "Residential-Plots" || $data[0]->property_type == "Commerical-Plots" ||$data[0]->property_type == "Agricultural-Land" || $data[0]->property_type == "Industrial-Land" || $data[0]->property_type == "Offices" || $data[0]->property_type == "Shops" || $data[0]->property_type == "Warehouses" || $data[0]->property_type == "Factories" ||  $data[0]->property_type == "Buildings" || $data[0]->property_type == "Other" )
            
							  <a href="tel:0302-8444701" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif
		
		 @if( $data[0]->purpose=="Sale" )
				@if( $data[0]->property_type == "Commerical-Plots" || $data[0]->property_type == "Agricultural-Land" || $data[0]->property_type == "Industrial-Land" || $data[0]->property_type == "Offices" || $data[0]->property_type == "Shops" || $data[0]->property_type == "Warehouses" || $data[0]->property_type == "Factories" || $data[0]->property_type == "Buildings" || $data[0]->property_type == "Other" )
               
							  <a href="tel:0302-8444706" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif
		
		
		
		 @if( $data[0]->purpose=="Sale" )
				@if( $data[0]->property_type == "Residential-Plots" || $data[0]->property_type == "Plot-Files" ||$data[0]->property_type == "Plot-Forms" )
                
							  <a href="tel:0302-8444781" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
			@endif
		
			
			
 @if( $data[0]->purpose=="Sale" )
            @if( $data[0]->property_type == "Houses" ||$data[0]->property_type == "Flates" || $data[0]->property_type == "Upper-Portions" || $data[0]->property_type == "Lower-Portions" || $data[0]->property_type == "Farms-House" || $data[0]->property_type == "Rooms" )
              
							  <a href="tel:0302-8444703" class="btn btn-primary btn-rounded scroll">Call Now</a>
            @endif
		@endif