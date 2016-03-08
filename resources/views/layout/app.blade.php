<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Expenso :: Expense Management System</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        
        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <!--{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->
        <link href="<?php echo asset('css/site.css')?>" rel="stylesheet">

    </head>
    <body>
           
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        EXPENSO
                    </a>
                </div>

            </div>
        </nav>
        
        <!-- Content Starting -->
            @yield('content')
        <!-- Content End -->
        
        
    </body>
    
</html>