<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.title') }} - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"  crossorigin="anonymous" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" rel="stylesheet" >
       <style>
        body {
            font-family: 'Nunito';
            width: 100%;
        }
        .header {
            background: rgb(0,215,1);
            background: linear-gradient(180deg, rgba(0,215,1,1) 0%, rgba(114,213,207,1) 50%, rgba(255,255,255,1) 100%);
        }
       </style>
    </head>
    <body class="row">
    <div class="header">
        <div class="col-12 text-center px-0">
            <div class="display-1 my-5">
                {{ config('app.name') }}
            </div>
        </div>
    </div>
    @yield('content')

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"  crossorigin="anonymous"></script>

</html>