<?php function nice_number($n) {
// first strip any formatting;
    $n = (0+str_replace(",", "", $n));

// is this a number?
    if (!is_numeric($n)) return false;

// now filter it;
    if ($n > 1000000000000) return round(($n/1000000000000), 2).' trillion';
    elseif ($n > 1000000000) return round(($n/1000000000), 2).' billion';
    elseif ($n > 1000000) return round(($n/1000000), 2).' million';
    elseif ($n > 1000) return round(($n/1000), 2).' thousand';

    return number_format($n);
}
?>

<!DOCTYPE html>

<html lang="en-US">
<head>
	
	
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106873354-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106873354-1');
</script>
	
	
	
	 @if((Request::is('/')))
	<title>Chohan Estate | Pakistan Largest Real Estate Company</title>
<meta name="description" content="The Largest Real Estate Company in Pakistan, House &amp; Bungalow For Sale and Rent, Residential &amp; Commercial Plot For Sale, in DHA, Model Town, Lahore Cantt"/>

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Chohan Estate | Pakistan Largest Real Estate Company" />
<meta property="og:description" content="The Largest Real Estate Company in Pakistan, House &amp; Bungalow For Sale and Rent, Residential &amp; Commercial Plot For Sale, in DHA, Model Town, Lahore Cantt" />
<meta property="og:url" content="http://www.chohanestate.com" />
<meta property="og:site_name" content="Chohan Estate" />
<meta property="og:image" content="http://chohanestate.com/assets/img/fb.jpg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="The Largest Real Estate Company in Pakistan, House &amp; Bungalow For Sale and Rent, Residential &amp; Commercial Plot For Sale, in DHA, Model Town, Lahore Cantt" />
<meta name="twitter:title" content="Chohan Estate | Pakistan Largest Real Estate Company" />
<meta name="twitter:site" content="@chohanestatepk" />
<meta name="twitter:image" content="http://chohanestate.com/assets/img/fb.jpg" />
<meta name="twitter:creator" content="@chohanestatepk" />
	@endif
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<meta name="author" content="Meeranlabs">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href={{ url("assets/img/favicon/general for web.png") }} />

   <link rel="apple-touch-icon" sizes="180x180" href={{ url("/apple-touch-icon.png") }}>
<link rel="icon" type="image/png" sizes="32x32" href={{ url("/favicon-32x32.png") }}>
<link rel="icon" type="image/png" sizes="16x16" href={{ url("/favicon-16x16.png") }}>
<link rel="mask-icon" href={{ url("/safari-pinned-tab.svg") }} color="#5bbad5">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="manifest" href={{ url("assets/manifest.json") }}>
   
 @if((Request::is('maps')))

<title>Maps Lahore DHA,Phase1,2,3,4,5,6,7,8,9 Prism Model Town ,Cantonment Board</title>
<meta name="description" content="it&#039;s contained map of model town , DHA Lahore, cant, Gulberg, Wapda Town, Johar Town, Muslim Town, Allama Iqbal Town, Township, Lahore, Pakistan"/>
<meta name="keywords" content="map,dha,phase,1,2,3,4,5,6,7,8,9,11,rahber,prism,town,dha,lahore,maps,lda,walton,barki,model,town,ferozpur,city,housing,scheme,state,life,sui,gas,barhia,lahore,cantt"/>

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Maps Lahore DHA,Phase1,2,3,4,5,6,7,8,9 Prism Model Town ,Cantonment Board" />
<meta property="og:description" content="it&#039;s contained map of model town , DHA Lahore, cant, Gulberg, Wapda Town, Johar Town, Muslim Town, Allama Iqbal Town, Township, Lahore, Pakistan" />
<meta property="og:url" content="https://dhafilerates.wordpress.com/dha-file-rates-lahore/" />
<meta property="og:site_name" content="Chohan Estate" />
<meta property="article:publisher" content="http://www.facebook.com/chohanestatepk" />
<meta property="article:author" content="facebook.com/chohanestatepk" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="it&#039;s contained map of model town , DHA Lahore, cant, Gulberg, Wapda Town, Johar Town, Muslim Town, Allama Iqbal Town, Township, Lahore, Pakistan" />
<meta name="twitter:title" content="Maps Lahore DHA,Phase1,2,3,4,5,6,7,8,9 Prism Model Town ,Cantonment Board" />
<meta name="twitter:site" content="@chohanestatepk" />
<meta name="twitter:creator" content="@chohanestatepk" />
@endif
    @if((Request::is('dha-file-rates')))
         <title>DHA File Rates </title>
        <meta name="description" content="DHA File Rates File rates are Volatile and subject to change any
        time. For latest updates please call +923028444781 or email"/>
        <meta name="robots" content="index,nofollow"/>
        <meta name="keywords" content="DHA File Rates , Plot For Sale in DHA Phase 1
        ,Plot For Sale in DHA Phase 2,Plot For Sale in DHA Phase 4,
        Plot For Sale in DHA Phase 5,Plot For Sale in DHA Phase 6,
        Plot For Sale in DHA Phase 7,Plot For Sale in DHA Phase 8
        ,Plot For Sale in DHA Phase 9 Prism, Plot For Sale in DHA Phase 9 Town, Plot For Sale in DHA Phase 10"/>

    @endif

 @if((Request::is('about-us')))
	
	<title>Chohan Estate Pakistan Largest Real Estate Property Company</title>
<meta name="description" content="chohan estate lahore chohan estate lahore the largest real estate company chohan estate the largest real estate lahore chohan estate largest real estate cho"/>
<link rel="canonical" href="http://chohanestate.com/about-us/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Chohan Estate Pakistan Largest Real Estate Property Company" />
<meta property="og:description" content="chohan estate lahore chohan estate lahore the largest real estate company chohan estate the largest real estate lahore chohan estate largest real estate cho" />
<meta property="og:url" content="http://chohanestate.com/about-us/" />
<meta property="og:site_name" content="Chohan Estate" />
<meta property="article:publisher" content="http://www.facebook.com/chohanestatepk" />
<meta property="article:author" content="facebook.com/chohanestatepk" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="chohan estate lahore chohan estate lahore the largest real estate company chohan estate the largest real estate lahore chohan estate largest real estate cho" />
<meta name="twitter:title" content="Chohan Estate Pakistan Largest Real Estate Property Company" />
<meta name="twitter:site" content="@chohanestatepk" />
<meta name="twitter:creator" content="@chohanestatepk" />
	
 @endif

    @if((Request::is('MarketAnalysis')))
	
<title>Market Analysis - Chohan Estate</title>
<link rel="canonical" href="http://chohanestate.com/category/blog/" />
<link rel="next" href="http://chohanestate.com/category/blog/page/2/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="object" />
<meta property="og:title" content="Blog Archives - Chohan Estate" />
<meta property="og:url" content="http://chohanestate.com/category/blog/" />
<meta property="og:site_name" content="Chohan Estate" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Blog Archives - Chohan Estate" />
<meta name="twitter:site" content="@chohanestatepk" />
	 @endif
	
	
	
    @if((Request::is('contact-us')))
	
	<title>Contact - Chohan Estate</title>
<meta name="description" content="Chohan esatate DHA, Chohan ESate DHA Phase 3 sector Z, Chohan Esatate country Home Lahore DHA, DHA best real Estate, DHA estate, DHA,DHA,DHA,DHA,DHA,DHA,"/>
<link rel="canonical" href="http://chohanestate.com/contact/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Contact - Chohan Estate" />
<meta property="og:description" content="Chohan esatate DHA, Chohan ESate DHA Phase 3 sector Z, Chohan Esatate country Home Lahore DHA, DHA best real Estate, DHA estate, DHA,DHA,DHA,DHA,DHA,DHA," />
<meta property="og:url" content="http://chohanestate.com/contact/" />
<meta property="og:site_name" content="Chohan Estate" />
<meta property="article:publisher" content="http://www.facebook.com/chohanestatepk" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Chohan esatate DHA, Chohan ESate DHA Phase 3 sector Z, Chohan Esatate country Home Lahore DHA, DHA best real Estate, DHA estate, DHA,DHA,DHA,DHA,DHA,DHA," />
<meta name="twitter:title" content="Contact - Chohan Estate" />
<meta name="twitter:site" content="@chohanestatepk" />
<meta name="twitter:creator" content="@chohanestatepk" />
	 @endif
	
	
	
	
	
	@if((Request::is('plot-for-sale-in-dha-lahore')))
	
	<title>Plot for sale in DHA Lahore.</title>
<meta name="description" content="Plot for sale in DHA Lahore,Plot for sale in DHA Lahore , Plot for sale in DHA Lahore Phase 9 Prism , DHA Plot for sale in DHA Lahore Phase 8,"/>
<link rel="canonical" href="http://chohanestate.com/plot-for-sale-in-dha-lahore/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Plot for sale in DHA Lahore." />
<meta property="og:description" content="Plot for sale in DHA Lahore,Plot for sale in DHA Lahore , Plot for sale in DHA Lahore Phase 9 Prism , DHA Plot for sale in DHA Lahore Phase 8," />
<meta property="og:url" content="http://chohanestate.com/plot-for-sale-in-dha-lahore/" />
<meta property="og:site_name" content="Chohan Estate" />
<meta property="article:publisher" content="http://www.facebook.com/chohanestatepk" />
<meta property="article:author" content="facebook.com/chohanestatepk" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Plot for sale in DHA Lahore,Plot for sale in DHA Lahore , Plot for sale in DHA Lahore Phase 9 Prism , DHA Plot for sale in DHA Lahore Phase 8," />
<meta name="twitter:title" content="Plot for sale in DHA Lahore." />
<meta name="twitter:site" content="@chohanestatepk" />
<meta name="twitter:creator" content="@chohanestatepk" />
	@endif
	
    <link href={{ url("assets/fonts/elegant-fonts.css") }} rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href={{ url("assets/bootstrap/css/bootstrap.css") }} type="text/css">
    <link rel="stylesheet" href={{ url("assets/css/owl.carousel.css") }} type="text/css">
    <link rel="stylesheet" href={{ url("assets/css/style.css") }} type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">




</head>

<body>