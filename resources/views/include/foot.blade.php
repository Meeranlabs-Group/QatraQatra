<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>




<script type="text/javascript" src={{ url("assets/js/jquery-2.2.1.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/jquery-migrate-1.2.1.min.js")}}></script>
<script type="text/javascript" src={{ url("http://maps.google.com/maps/api/js?key=AIzaSyCER7BUrzg5FXz5hivZKd2XzkWAMrTlX2k&sensor=false&libraries=places")}}></script>
{{--<script type="text/javascript" src={{ url("assets/js/infobox.js")}}></script>--}}
{{--<script type="text/javascript" src={{ url("assets/js/markerclusterer_packed.js")}}></script>--}}
{{--<script type="text/javascript" src={{ url("assets/js/richmarker-compiled.js")}}></script>--}}
<script type="text/javascript" src={{ url("assets/js/markerwithlabel_packed.js")}}></script>
<script type="text/javascript" src={{ url("assets/bootstrap/js/bootstrap.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/jquery.validate.min.js")}}></script>
{{--<script type="text/javascript" src={{ url("assets/js/bootstrap-datepicker.js")}}></script>--}}
<script type="text/javascript" src={{ url("assets/js/icheck.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/owl.carousel.js")}}></script>
{{--<script type="text/javascript" src={{ url("assets/js/masonry.pkgd.min.js")}}></script>--}}
<script type="text/javascript" src={{ url("assets/js/jQuery.MultiFile.min.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/maps.js")}}></script>
<script type="text/javascript" src={{ url("assets/js/custom.js")}}></script>

<!--[if lte IE 9]>
<script src={{ url("assets/js/ie.js")}}></script>
<![endif]-->

<script src={{url("assets/js/jquery.mCustomScrollbar.min.js")}}></script>
<script src={{url("assets/js/jquery.newsTicker.js")}}></script>






<script>
	
	
	
	
	
	
	
	$('.Btn').click(function(e) {
    $('.Btn').not(this).removeClass('active');    
    $(this).toggleClass('active');
    e.preventDefault();
});


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsiveClass:true,
        nav : false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }




    });


    $(window).load(function(){
        $('code.language-javascript').mCustomScrollbar();
    });
    var nt_title = $('#nt-title').newsTicker({
        row_height: 40,
        max_rows: 1,
        duration: 3000,
        pauseOnHover: 0
    });



</script>

<!--[if lte IE 9]>
<script src="assets/js/ie.js"></script>
<![endif]-->



<script>



    var nt_title = $('#nt-title').newsTicker({
        row_height: 40,
        max_rows: 1,
        duration: 3000,
        pauseOnHover: 0
    });



</script>


<script>

    var _latitude = 31.483434 ;
    var _longitude = 74.393061;
    var element = "map-item";
    var useAjax = true;
    bigMap(_latitude,_longitude, element, useAjax);
</script>




<script>
    $(document).ready(function(){

		$("#0").show();
		$("#show").focus();

        $("#show").click(function(e){
			
            $("#p").val($("#show").val());
			
        });


        $("#show1").click(function(e){
			
            $("#p").val($("#show1").val());
			
			

        });




    });
</script>




<script type="text/javascript">





    function removeOptions(selectbox)
    {
        var i;
        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
        {
            selectbox.remove(i);
        }
    }
    //using the function:

    document.getElementById('city1').onchange = function () {
        removeOptions(document.getElementById("society1"));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var e = document.getElementById("city1");
        var value = e.options[e.selectedIndex].value;
        if(value){


            removeOptions(document.getElementById("society1"));


            $.ajax({



                url:'/getsocieties/' + value,
                type: "GET",
                dataType: "json",
                success: function(data){


                    for (var i = 0; i < data.length; i++) {


                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        var select = document.getElementById("society1");
                        select.append(option);


                    }



                }

            });
        }











    }

</script>


<script type="text/javascript">





    function removeOptions(selectbox)
    {
        var i;
        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
        {
            selectbox.remove(i);
        }
    }
    //using the function:

    document.getElementById('society1').onchange = function () {
        removeOptions(document.getElementById('phase1'));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var e = document.getElementById('society1');
        var value = e.options[e.selectedIndex].value;
        if(value){


            removeOptions(document.getElementById('phase1'));


            $.ajax({



                url:'/getphases/' + value,
                type: "GET",
                dataType: "json",
                success: function(data){


                    for (var i = 0; i < data.length; i++) {


                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        var select = document.getElementById('phase1');
                        select.append(option);


                    }



                }

            });
        }











    }

</script>

<script>
    document.getElementById('object-type').onchange = function () {
        document.getElementById("Property-type").disabled = this.value == '01';
    }

    document.getElementById('Property-type').onchange = function () {
        $("#main-info").removeClass("hidden");
        var e = document.getElementById("Property-type");
        var value = e.options[e.selectedIndex].value;
        var str1="#";
        var text = e.options[e.selectedIndex].text;

        var text=str1.concat(value);
        $(text).removeClass("hidden");


        if(value=='Houses') {
            $('#view').load('/Housesview/');
        }
        else if(value=='Flates'){
            $('#view').load('/Flatesview/');
        }
        else if(value=='Upper-Portions'){
            $('#view').load('/Upper-Portionsview/');

        } else if(value=='Lower-Portions'){
            $('#view').load('/Lower-Portionsview/');

        } else if(value=='Farms-House'){
            $('#view').load('/Farms-Houseview/');

        } else if(value=='Residential-Plots'){
            $('#view').load('/Residential-Plotsview/');

        } else if(value=='Commercial-Plots'){
            $('#view').load('/Commercial-Plotsview/');

        } else if(value=='Agricultural-Land'){
            $('#view').load('/Agricultural-Landview/');

        } else if(value=='Industrial-Land'){
            $('#view').load('/Industrial-Landview/');
        }
        else if(value=='Offices'){
            $('#view').load('/Officesview/');

        } else if(value=='Shops'){
            $('#view').load('/Shopsview/');

        } else if(value=='Warehouses'){
            $('#view').load('/Warehousesview/');

        } else if(value=='Factories'){
            $('#view').load('/Factoriesview/');

        } else if(value=='Buildings'){
            $('#view').load('/Buildingsview/');

        } else if(value=='Other'){
            $('#view').load('/Otherview/');
        }
        else {

            $('#view').html('');


        }

    }
</script>


<script type="text/javascript">
    function removeOptions(selectbox)
    {
        var i;
        for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
        {
            selectbox.remove(i);
        }
    }
    //using the function:

    document.getElementById('city').onchange = function () {
        removeOptions(document.getElementById("society"));



        removeOptions(document.getElementById("block"));
        removeOptions(document.getElementById("Phase"));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var e = document.getElementById("city");
        var value = e.options[e.selectedIndex].value;
        if(value){


            removeOptions(document.getElementById("society"));
            removeOptions(document.getElementById("Phase"));
            removeOptions(document.getElementById("block"));







            $.ajax({



                url:'/getsocieties/' + value,
                type: "GET",
                dataType: "json",
                success: function(data){

                    var option = document.createElement("option");
                    option.text = "Select Society";
                    option.value ="";
                    var select = document.getElementById("society");
                    select.append(option);
                    for (var i = 0; i < data.length; i++) {


                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        var select = document.getElementById("society");
                        select.append(option);


                    }



                }

            });
        }











    }

</script>


<script type="text/javascript">

    document.getElementById('society').onchange = function () {

        removeOptions(document.getElementById("Phase"));
        removeOptions(document.getElementById("block"));



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var s = document.getElementById("society");
        var value1 = s.options[s.selectedIndex].value;



        if(value1){
            removeOptions(document.getElementById("Phase"));
            removeOptions(document.getElementById("block"));

            $.ajax({



                url:'/getphases/' + value1,
                type: "GET",
                dataType: "json",
                success: function(data){
console.log(data);
                    var option = document.createElement("option");
                    option.text = "Select Phase";
                    option.value ="";
                    var select = document.getElementById("Phase");
                    select.append(option);

                    for (var i = 0; i < data.length; i++) {


                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        var select = document.getElementById("Phase");
                        select.appendChild(option);


                    }



                }

            });
        }


    }

</script>

<script type="text/javascript">

    document.getElementById('Phase').onchange = function () {



        removeOptions(document.getElementById("block"));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        var t = document.getElementById("Phase");
        var value2 = t.options[t.selectedIndex].value;



        if(value2){


            removeOptions(document.getElementById("block"));

            $.ajax({



                url:'/getblocks/' + value2,
                type: "GET",
                dataType: "json",
                success: function(data){

                    var option = document.createElement("option");
                    option.text = "Select Block";
                    option.value ="";
                    var select = document.getElementById("block");
                    select.append(option);
                    for (var i = 0; i < data.length; i++) {


                        var option = document.createElement("option");
                        option.text = data[i].name;
                        option.value = data[i].id;
                        var select = document.getElementById("block");
                        select.appendChild(option);


                    }



                }

            });
        }



    }


</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    function yes() {
        var availableTags = [

        ];

        var s = document.getElementById("name");
        var f = document.getElementById("society");

        $.ajax({



            url:'/get_blocks/' + s.value + '/' + 1,
            type: "GET",
            dataType: "json",
            success: function(data){

                console.log(data);
            }

        });







        $( "#name" ).autocomplete({
            source: availableTags
        });
    }
</script>


</body>
</html>
