@include('include.head')
@include('partials.navbar')



<div class="block">
    <div class="container">
        <div class="title">
            <h2 class="center">Available Properties</h2>
        </div>
        <!--end title-->





        {{--{{ $Property->where('city','=',"Lahore") }}--}}
        {{--{{ $total= Property::where('city',"Lahore") }}--}}
        {{--{{ $total }}--}}

        <ul class="list-links">

            <li><a href="{{ asset('map/ABDALIAN.jpg') }}">Abdalian</a></li>
            <li><a href="{{ asset('map/ALLAMA-IQBAL-TOWN.jpg') }}">Allama Iqbal Town</a></li>
            <li><a href="{{ asset('map/ARMYWELFAIR.jpg' ) }}">Army Welfair</a></li>
            <li><a href="{{ asset('map/CANAL-VIEW.jpg') }}">Canal View</a></li>
            <li><a href="{{ asset('map/CAVLARY-GROUND.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('map/CHANAR-BAGH.jpg') }}">Chanar Bagh</a></li>
            <li><a href="{{ asset('map/DH-PH-8-updated.jpg') }}">DHA Phase 8 Upadated</a></li>
            <li><a href="{{ asset('map/DHA 1-5.jpg' ) }}">DHA Phase 1-5</a></li>
            <li><a href="{{ asset('map/DHA-COMM-1-11 (1).jpg') }}">DHA Phase Commercial 1-11</a></li>
            <li><a href="{{ asset('map/DHA-Phase-1.jpg') }}">DHA Phase 1</a></li>
            <li><a href="{{ asset('map/DHA-Phase-2.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('map/DHA-Phase-3.jpg') }}">DHA Phase 3</a></li>
            <li><a href="{{ asset('map/DHA-Phase-4.jpg') }}">DHA Phase 4</a></li>
            <li><a href="{{ asset('map/DHA-Phase-5.jpg') }}">DHA Phase 6</a></li>
            <li><a href="{{ asset('map/DHA-PHASE-9-TOWN.jpg') }}">DHA Phase 9 Town</a></li>
            <li><a href="{{ asset('map/DHA-PHASE-XI-11-HALLOKI-GARDEN-1.jpg') }}">DHA Phase XI HALLOKI GARDEN</a></li>
            <li><a href="{{ asset('map/DHA-PHASE-XI-11-RAHBAR.jpg') }}">DHA Phase 11 Rahbar</a></li>
            <li><a href="{{ asset('map/EME.jpg') }}">DHA EME Sector</a></li>
            <li><a href="{{ asset('map/FAISAL-TOWN.jpg') }}">Faisal Town + Model Town Ext</a></li>
            <li><a href="{{ asset('map/FAZAIA15-6-12-Q.jpg') }}">Fazaia Housing Scheme </a></li>
            <li><a href="{{ asset('map/FORMANITE.jpg') }}">Formanites Housing Scheme</a></li>
            <li><a href="{{ asset('map/GARDEN-TOWN.jpg') }}">New Garden Town</a></li>

            <li><a href="{{ asset('map/IZMIR-TOWN.jpg') }}">Izmir Town</a></li>

            <li><a href="{{ asset('map/uu.jpg') }}">Johar Town Phase 1</a></li>
            <li><a href="{{ asset('map/JOHAR-TOWN-2.jpg') }}">JOHAR TOWN Phase 2</a></li>
            <li><a href="{{ asset('map/JUBLLE-TOWN.jpg') }}">JUBLLE TOWN</a></li>
            <li><a href="{{ asset('map/LAHORE.jpg') }}">LAHORE</a></li>
            {{--<li><a href="{{ asset('map/) }}">DHA Phase 2</a></li>--}}
            <li><a href="{{ asset('map/LDA-1.jpg') }}">DHA Phase 2</a></li>
            <li><a href="{{ asset('map/MODEL-TOWN.jpg') }}">MODEL TOWN</a></li>
            <li><a href="{{ asset('map/MUSLIM-TOWN.jpg') }}">MUSLIM-TOWN</a></li>
            <li><a href="{{ asset('map/NFC-2.jpg') }}">NFC</a></li>
            <li><a href="{{ asset('map/OPF.jpg') }}">O.P.F Housing Scheem</a></li>
            <li><a href="{{ asset('map/PECO.jpg') }}">Marghzar</a></li>
            <li><a href="{{ asset('map/PND.jpg') }}">P & D | Iqbal Avenue PH:3 Nespak PH:2</a></li>
            <li><a href="{{ asset('map/PUBLIC-HALTH.jpg') }}">Public Health Housing Scheem</a></li>
            <li><a href="{{ asset('map/PUNJAB-COP.jpg') }}">Punjab Co-Operative Housing Society</a></li>


            <li><a href="{{ asset('map/RAILTOWN.jpg') }}">RailTown Co-Operative Housing Society</a></li>
            <li><a href="{{ asset('map/rsz_1new_phase_67.jpg') }}">DHA Phase 6,7 and 9</a></li>
            <li><a href="{{ asset('map/SABZAZAR.jpg') }}">Sabzazar</a></li>
            <li><a href="{{ asset('map/STATE-LIFE-1.jpg') }}">State Life Phase 1</a></li>


            <li><a href="{{ asset('map/STATE-LIFE-2.jpg') }}">State Life Phase 2</a></li>
            <li><a href="{{ asset('map/SUIGAS-2.jpg') }}">Sui Gas Housing Society</a></li>
            <li><a href="{{ asset('map/TnT.jpg') }}">T&T Abpara housing Society</a></li>
            <li><a href="{{ asset('map/TOWN-SHIP.jpg') }}">Town Ship</a></li>



            <li><a href="{{ asset('map/WAPDA-TOWN.jpg') }}">Wapda Town</a></li>
            <li><a href="{{ asset('map/Z-BLOCK.jpg') }}">Phase 8 Z Block IVY</a></li>
            <li><a href="{{ asset('map/HBFC.jpg') }}"> HBFC Officers Co. Housing Society</a></li>

        </ul>

            <!--end list-links-->
        </div>
        <!--end container-->
    </div>
    <!--end block-->


    <!--end block-->










@include('partials.footer');
@include('include.foot');
