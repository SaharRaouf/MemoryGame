<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Spelifierat lärande!</title>
    <style>
        body{
            padding-top: 100px;
        }
        h2{
            color:#006400;
        }
        h3{
            color: #000066;
        }
    </style>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//css/app.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css"  />
    <link rel="stylesheet" herf="/css/app.css">
    <link rel="stylesheet" herf="/css/libs.css">
</head>
    <body>

    @include('partial.nav')
        <div class="container">
           @include('flash::message')

            @yield('content')

        </div>

    <!-- Scripts -->
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
        <script src="../../assets/js/jquery.js"></script>
         <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.js"></script>
        <script src="/js/main.js"></script>
        <script>

            //activate the plugin
            $('#flash-overlay-modal').modal();
           $('div.alert').not('alert-important').delay(3000).slideUp(300);
        </script>
</body>


