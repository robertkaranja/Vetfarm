<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/new/bootstrap.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            
            #head{
                width: 100%;
                height: 500px;
                 background-color: black;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #welcome{
                margin-top: 20px;
            }
            h1{
                padding-top: 50px;
                text-align: center;
                color: black;
            }
            p{
                text-align: center;
                color: white;
                font-size: 20px;
            }
            .list-group{
                width: 100px;
                align-items: center;
                background-color: grey;
            }
            
            
        </style>
    </head>
    <body>
<header id="#head">
        <h2><strong>Vetfarm</strong></h2>
</header>
    <div class="all">
    <div class="well">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        
                        @else
                            <a href="{{ route('login') }}" ><button  class="btn btn-primary"><strong>Login</strong> </button></a>
                            <a href="{{ route('register') }}"><button  class="btn btn-primary"><strong>Register</strong></button></a>
                        @endauth
                    </div>
                @endif

       
       <div class="well">
                
        </div>
            
        </div>
        </div>



    </body>
    
</html>


<!-- 
    <h1><strong>Welcome to VetFarm</strong></h1> 
            
                <p style="color: limegreen;"><b><strong> <u> In this platform you have access to services like:<br>
                </u></b></strong></p> 
                <p style="color: white;"><b><strong>        
                                Unlimited Access to Information Regarding Farming<br><br>
                                Access to Veterinary Nearest your Location<br><br>
                                Wide Market for Products<br><br>
                               
                </b></strong></p>
                
                <a  href="{{ url('/home') }}" class="btn btn-primary js-scroll-trigger btn btn-group-lg" style="margin-left: 600px"><strong>Get Started</strong></a> 

                -->