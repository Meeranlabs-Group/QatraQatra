

<h1 style="color:grey">Contact Us</h1>
<address style="padding-left:10%;">

    <strong>Head Office</strong><br>
    G -16, Phase 1, Masjid Chowk,<br>
    Defence Housing Authority Lahore Cantt., Pakistan.<br>
    <br>
    <strong>UAN:</strong> +92-42-111-124-124<br>




    @if(($data[0]->property_type=='Houses'||$data[0]->property_type=='Flates'||
    $data[0]->property_type=='Lower-Portions'||
    $data[0]->property_type=='Upper-Portions'||
    $data[0]->property_type=='Farms-House'||
    $data[0]->property_type=='Rooms'

    )&&  $data[0]->purpose=='Sale')

         <strong>Mobile:</strong> 03028444703<br>
        <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
        <strong>Fax:</strong> +92-42-35729990<br>
        <strong>Email:</strong>info@chohanestate.com<br>


    @elseif(($data[0]->property_type=='Residential-Plots'||
    $data[0]->property_type=='Plot-Files'||
    $data[0]->property_type=='Plot-Forms'
    )&&  $data[0]->purpose=='Sale')



        <strong>Mobile:</strong> 03028444781 <br>
        <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
        <strong>Fax:</strong> +92-42-35729990<br>
        <strong>Email:</strong>info@chohanestate.com<br>




    @elseif($data[0]->purpose=='Rent')

        <strong>Mobile:</strong> 03028444701 <br>
        <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
        <strong>Fax:</strong> +92-42-35729990<br>
        <strong>Email:</strong>info@chohanestate.com<br>

    @else
        <strong>Mobile:</strong> 03028444729 <br>
        <strong>Tel:</strong> +92-42-35727771-4, 35728881-4<br>
        <strong>Fax:</strong> +92-42-35729990<br>
        <strong>Email:</strong>info@chohanestate.com<br>




    @endif


    <a href="#">info@chohanestate.com</a><br>
    <strong>skype:</strong> your.company

    <h2>Social Profiles</h2>
    <div class="social-icons">

        <a href="https://www.facebook.com/ChohanEstatePk/" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/ChohanEstatePk/" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/ChohanEstatePk/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/watch?v=tVQWQIb_2ok" target="_blank"><i class="fa fa-youtube"></i></a>

    </div>



</address>