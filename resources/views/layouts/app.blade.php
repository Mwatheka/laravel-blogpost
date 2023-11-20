<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- //Include bootstrap CSS CDN here -->

        <style>
            .jumbotron{
                background-color:aqua;
                border-radius:20px;
                margin:20px 20px 20px 20px;
                padding:20px 20px 20px 20px;
            }
            .postbody {
                text-align:justify;
                text-indent:70px;
            }
            .button-container .row{
                display:flex;
                justify-content:space-between;
                flex-wrap:wrap;
            }
        </style>

    </head>

    <body>
        

    @yield('content')

    </body>
    <!-- //Include bootstrap JS CDN here  -->
</html>