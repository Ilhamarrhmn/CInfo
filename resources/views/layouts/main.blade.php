<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/css/bootstrap.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/datatables/datatablecss.min.css') }}">

        <title>@yield('title')</title>
    </head>
    <body style="background-color:#E7E7EC;">     
        @yield('content');
        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script> -->
        <!-- <script src="{{ Storage::url('assets/ckeditor/ckeditor.js') }}"> </script> -->
        <!-- <script src="{{ Storage::url('assets/js/bootstrap.min.js') }}"> </script> -->
        <script type="text/javascript" src="{{ Storage::url('assets/datatables/jquery-3.5.1.js') }}"></script>
	    <script type="text/javascript" src="{{ Storage::url('assets/js/bootstrap.js') }}"></script>
    </body>
</html>