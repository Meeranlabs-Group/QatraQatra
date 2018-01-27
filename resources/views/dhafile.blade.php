@include('include.head')
@include('partials.navbar')



<div class="block">
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{ url("/")}}">Home</a></li>
            <li class="active">Dha File Rates</li>

        </ol>

        <div class="title">
            <h2 class="center">DHA File Rates</h2>
        </div>
        <!--end title-->

        <div class="container">


            <style>
                * {
                    box-sizing: border-box;
                }

                #myInput {

                    background-position: 10px 10px;
                    background-repeat: no-repeat;
                    width: 100%;
                    font-size: 16px;
                    padding: 12px 20px 12px 40px;
                    border: 1px solid #ddd;
                    margin-bottom: 12px;
                }

                #myTable {
                    border-collapse: collapse;
                    width: 100%;
                    border: 1px solid #ddd;
                    font-size: 18px;
                }

                #myTable th, #myTable td {
                    text-align: left;
                    padding: 12px;
                }

                #myTable tr {
                    border-bottom: 1px solid #ddd;
                }

                #myTable tr.header, #myTable tr:hover {
                    background-color: #f1f1f1;
                }
            </style>


            {{--<h2>File rate Search</h2>--}}

            <div class="col-md-9" >
                {{--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">--}}


            </div>

            <div class="col-md-3" >
                <label> File Rate Search</label>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search File rate" title="Type in a name">


            </div>

            <div class="col-md-12">

               <table id="myTable">
<thead>
<tr class="row-1 odd" role="row">
<th class="column-1 sorting" tabindex="0" colspan="1" rowspan="1" aria-controls="tablepress-9" aria-label="Phase: activate to sort column ascending"><strong>Phase</strong></th>
<th class="column-2 sorting" tabindex="0" colspan="1" rowspan="1" aria-controls="tablepress-9" aria-label="Size: activate to sort column ascending"><strong>Size</strong></th>
<th class="column-3 sorting" tabindex="0" colspan="1" rowspan="1" aria-controls="tablepress-9" aria-label="Price: activate to sort column ascending"><strong>Price</strong></th>
<th class="column-4 sorting" tabindex="0" colspan="1" rowspan="1" aria-controls="tablepress-9" aria-label="Contact: activate to sort column ascending"><strong>Contact</strong></th>
</tr>
</thead>
<tbody>
<tr class="row-2 even" role="row">
<td class="column-1">Phase 7</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">78 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-3 odd" role="row">
<td class="column-1">Phase 7</td>
<td class="column-2">10 Marla</td>
<td class="column-3">56&nbsp; Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-4 even" role="row">
<td class="column-1">Phase 7</td>
<td class="column-2">05 Marla</td>
<td class="column-3">33 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-5 odd" role="row">
<td class="column-1">Phase 7</td>
<td class="column-2">04 Marla</td>
<td class="column-3">235 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-6 even" role="row">
<td class="column-1">Phase 8 Z Block</td>
<td class="column-2">10 Marla</td>
<td class="column-3">60 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-7 odd" role="row">
<td class="column-1">Phase 8 Z Block</td>
<td class="column-2">04 Marla</td>
<td class="column-3">250 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-8 even" role="row">
<td class="column-1">Phase 8 Park View</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">117 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-9 odd" role="row">
<td class="column-1">Phase 8 Park View</td>
<td class="column-2">04 Marla</td>
<td class="column-3">238&nbsp; Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-10 even" role="row">
<td class="column-1">Phase 8 Proper</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">138 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-11 odd" role="row">
<td class="column-1">Phase 9</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">74 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-12 even" role="row">
<td class="column-1">Phase 9</td>
<td class="column-2">10 Marla</td>
<td class="column-3">50 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-13 odd" role="row">
<td class="column-1">Phase 9</td>
<td class="column-2">05 Marla</td>
<td class="column-3">30 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-14 even" role="row">
<td class="column-1">Phase 10</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">53.50 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-15 odd" role="row">
<td class="column-1">Phase 9 Town</td>
<td class="column-2">05 Marla</td>
<td class="column-3">37 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-16 even" role="row">
<td class="column-1">Phase 9 Town&nbsp;(sold)</td>
<td class="column-2">04 Marla</td>
<td class="column-3">300 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-17 odd" role="row">
<td class="column-1">Phase 9 Ext.</td>
<td class="column-2">10 Marla</td>
<td class="column-3">37Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-18 even" role="row">
<td class="column-1">Phase 9 Ext.</td>
<td class="column-2">05 Marla</td>
<td class="column-3">25.25 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-19 odd" role="row">
<td class="column-1">Rahber</td>
<td class="column-2">10 Marla</td>
<td class="column-3">60 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-20 even" role="row">
<td class="column-1">Rahber</td>
<td class="column-2">05 Marla</td>
<td class="column-3">29.50Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-21 odd" role="row">
<td class="column-1">Rahber</td>
<td class="column-2">04 Marla</td>
<td class="column-3">206 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-22 even" role="row">
<td class="column-1">Multan Ext.</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">36 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-23 odd" role="row">
<td class="column-1">Multan</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">48 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-24 even" role="row">
<td class="column-1">Bahawalpur</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">27.75 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-25 odd" role="row">
<td class="column-1">Peshawar</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">58 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-26 even" role="row">
<td class="column-1">Gujranwala</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">46 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-27 odd" role="row">
<td class="column-1">Gujranwala</td>
<td class="column-2">10 Marla</td>
<td class="column-3">31.90 Lac</td>
<td class="column-4">+923028444781</td>
</tr>
<tr class="row-28 even" role="row">
<td class="column-1">LDA City</td>
<td class="column-2">01 Kanal</td>
<td class="column-3">42 Lac</td>
<td class="column-4">+923028444842</td>
</tr>
<tr class="row-29 odd" role="row">
<td class="column-1">LDA City</td>
<td class="column-2">05 Marla</td>
<td class="column-3">17.25 Lac</td>
<td class="column-4">+923028444842</td>
</tr>
</tbody>
</table>

            </div>


            <script>
                function myFunction() {
                    var input, filter, table, tr, td1, td2, td3, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td1 = tr[i].getElementsByTagName("td")[0];
                        td2 = tr[i].getElementsByTagName("td")[1];
                        td3 = tr[i].getElementsByTagName("td")[2];
                        if (td1||td2||td3) {
                           if ((td1.innerHTML.toUpperCase().indexOf(filter) > -1 )||

                               ( td2.innerHTML.toUpperCase().indexOf(filter) > -1)

                              )

                            {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            </script>



        </div>







            <!--end list-links-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->


    <!--end block-->










@include('partials.footer');
@include('include.foot');
