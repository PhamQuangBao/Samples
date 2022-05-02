<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@if(isset($title)){{$title}} @else Samples @endif</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="/lib/openlayers/v6.14.1-dist/ol.css"> -->
<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
<!-- Font Awesome Icon -->
<link href="/lib/fontawesome/css/all.css" rel="stylesheet">
<style>
    .map{
        
        width: 100%;
        height: 700px;
    }
    .draw-app{
        top: 65px;
        left: .5em;
    }
    .ol-touch .draw-app{
        top: 80px;
    }
</style>

@yield('header')