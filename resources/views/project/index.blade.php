@extends('app')
<html>
<head>
    <title>Examensarbete</title>
    <style>
        body{
            padding-top: 100px;
            padding-right: 50px;
            padding-left: 50px;
        }
        .title{
            font-size: 50px;
            color: #054915;
        }
        .info{
            font-style: italic;
            font-size: 20px;
        }
        .obs{
            font-size: 11px;
            color: #484849;
        }
    </style>
</head>
<body>

<div class="title">Spelifierat lärande!</div>
<div class="info">
    <p>Effekten av spelliknande incitament på lärande och motivation hos skolelever vid användande av digitalt läromedel</p>
</div>
<div class="obs">
    <p>En examensarbete i samarbete med <a target="_blank" href="https://www.kth.se/om/fakta" >KTH</a> och <a target="_blank" href="http://studi.se/">Studi.se</a>.</p>
</div>
</body>

</html>
@include('partial.footer')