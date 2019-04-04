<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'vetfarm') }}</title>
    <style>

    #map{
        height: 400px;
        width: 100%;
    }
    .notifications{
        display: none;
    }

    .bg-modal{
        width: 91.8%;
        height: 100%;
        position: absolute;
        top:0;
        justify-content: center;
        align-items: center;
        display: none;
    }
    .modal-content{
        width: 500px;
        height: 400px;
        background-color: white;
        border-radius: 4px;
        text-align: center;
    }
    .close{
        font-size: 42px;
        position: absolute;
        top: 0;
        right: 14px;
        transform: rotate(45deg);
    }
    h5{
        color: green;
    }
    body{
    margin-top: auto; 
    
    margin: 0;
    padding: 0;
  }


  .border{
    border-bottom:1px solid #F1F1F1;
    margin-bottom:10px;
  }
  .main-secction{
    box-shadow: 10px 10px 10px;
  }
  .image-section{
    padding: 0px;
  }
  .image-section img{
    width: 100%;
    height:250px;
    position: relative;
  }
  .user-image{
    position: absolute;
    margin-top:-50px;
  }
  .user-left-part{
    margin: 0px;
  }
  .user-image img{
    width:100px;
    height:100px;
  }
  .user-profil-part{
    padding-bottom:30px;
    background-color:#FAFAFA;
  }
  .follow{    
    margin-top:70px;   
  }
  .user-detail-row{
    margin:0px; 
  }
  .user-detail-section2 p{
    font-size:12px;
    padding: 0px;
    margin: 0px;
  }
  .user-detail-section2{
    margin-top:10px;
  }
  .user-detail-section2 span{
    color:#7CBBC3;
    font-size: 20px;
  }
  .user-detail-section2 small{
    font-size:12px;
    color:#D3A86A;
  }
  .profile-right-section{
    padding: 20px 0px 10px 15px;
    background-color: #FFFFFF;  
  }
  .profile-right-section-row{
    margin: 0px;
  }
  .profile-header-section1 h1{
    font-size: 25px;
    margin: 0px;
  }
  .profile-header-section1 h5{
    color: #0062cc;
  }
  .req-btn{
    height:30px;
    font-size:12px;
  }
  .profile-tag{
    padding: 10px;
    border:1px solid #F6F6F6;
  }
  .profile-tag p{
    font-size: 12px;
    color:black;
  }
  .profile-tag i{
    color:#ADADAD;
    font-size: 20px;
  }
  .image-right-part{
    background-color: #FCFCFC;
    margin: 0px;
    padding: 5px;
  }
  .img-main-rightPart{
    background-color: #FCFCFC;
    margin-top: auto;
  }
  .image-right-detail{
    padding: 0px;
  }
  .image-right-detail p{
    font-size: 12px;
  }
  .image-right-detail a:hover{
    text-decoration: none;
  }
  .image-right img{
    width: 100%;
  }
  .image-right-detail-section2{
    margin: 0px;
  }
  .image-right-detail-section2 p{
    color:#38ACDF;
    margin:0px;
  }
  .image-right-detail-section2 span{
    color:#7F7F7F;
  }

  .nav-link{
    font-size: 1.2em;    
  }
*{
    box-sizing: border-box;
}
  .header{
    position: absolute;
    height: 44px;
    width: 100%
    background-color: #999;
  }
  .side-navv
    position: absolute;
    width: 100%
    background-color: green;
    height: 100vh;
    z-index: 3;
    padding-top: 44px;
  }
  .side-navv ul{
    list-style: none;
    padding: 0;
    margin: 0;

  }
  .side-navv ul li{
    padding: 20px 10px;
    border-bottom: 1px solid #333;
  }
  .side-navv ul li a {
    color: black;
    text-decoration: none;
  }
  .side-navv ul li i {
    color: #333;
  }
  @media screen and (min-width: 600px){
    .side-navv {
        width: 80px;
    }
    .side-navv ul li{
        text-align: center;
    }
    .side-navv ul li span:nth-child(2) {
        display: none;
    }
    .side-navv ul li i {
        font-size: 26px;
    }
  }
  @media screem and (min-width: 1000px) {
        .side-navv{
            width: 200px;
        }
  }





#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  background-color: grey;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.9rem;
  color: white;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

/* table ====================================================*/


@font-face {
  font-family: Montserrat-Regular;
  src: url('../fonts/montserrat/Montserrat-Regular.ttf'); 
}

@font-face {
  font-family: Montserrat-Medium;
  src: url('../fonts/montserrat/Montserrat-Medium.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
    margin: 0px; 
    padding: 0px; 
    box-sizing: border-box;
}


}

/* ------------------------------------ */
a {
    margin: 0px;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
    outline: none !important;
}

a:hover {
    text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
    margin: 0px;
    list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
    outline: none;
    border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

/* ------------------------------------ */
button {
    outline: none !important;
    border: none;
    background: transparent;
}

button:hover {
    cursor: pointer;
}

iframe {
    border: none !important;
}



/*//////////////////////////////////////////////////////////////////
[ Table ]*/
.weka{
    display: none;
}
.limiter {
  width: 80%;
  margin-top: -10px;
  margin-left: 200px;
  display: flex;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #d1d1d1;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1300px;
}

/*//////////////////////////////////////////////////////////////////
[ Table ]*/
table {
  width: 100%;
  background-color: #fff;
}

th, td {
  font-weight: unset;
  padding-right: 10px;
}

.column100 {
  width: 130px;
  padding-left: 25px;
}

.column100.column1 {
  width: 50px;
  padding-left: 42px;
}
.column100.column5 {
  width: 250px;
  padding-left: 42px;
}

.row100.head th {
  padding-top: 24px;
  padding-bottom: 20px;
}

.row100 td {
  padding-top: 18px;
  padding-bottom: 14px;
}


/*==================================================================
[ Ver1 ]*/
.table100.ver1 td {
  font-family: Montserrat-Regular;
  font-size: 14px;
  color: #808080;
  line-height: 1.4;
  margin-top: -10px;
}

.table100.ver1 th {
  font-family: Montserrat-Medium;
  font-size: 12px;
  color: #fff;
  line-height: 1.4;
  text-transform: uppercase;

  background-color: #36304a;
}

.table100.ver1 .row100:hover {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-ver1 {
  background-color: #f2f2f2;
}

.table100.ver1 .hov-column-head-ver1 {
  background-color: #484848 !important;
}

.table100.ver1 .row100 td:hover {
  background-color: #6c7ae0;
  color: #fff;
}



    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                         <!--Authentication Links -->
                        @guest
                        
                                <li><a href="{{ route('login') }}">Login</a></li>
                           <!-- <li><a href="{{ route('register') }}">Register</a></li>-->
                            

                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   Register <span class="caret"></span>
                                </a>                             
                            
                                
                                <ul class="dropdown-menu">
                                <li><a href="{{ route('register') }}">Register as Farmer</a></li>
                                <li><a href="#">Register as Veterinary</a></li>
                                </ul>
            </li>
            


                        @else
                        <li>
                            <a href="/products"><strong> Buy and Sell </strong></a>
                        </li>
                        <li>
                            <a href="#"><strong>Find a Veterinary</strong></a>
                        </li>
                          <li>
                            <a href="#"><strong>my Livestock</strong></a>
                        </li>
                         <li>
                            <a href="/notifications">
                                <strong>News</strong>

                            </a>
                            </li>
                        <li>
                            <a href="/profile"><strong>My Profile</strong></a>
                        </li>

@if(Auth::user()->id == 1)
            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    Admin <span class="caret"></span>
                                </a>                             
                            
                                
                                <ul class="dropdown-menu">
                                <li><a href="/admins">Manage All Users</a></li>
                                <li><a href="/manage">News</a></li>
                                
                                
                                </ul>
            </li>
                        
  
    @endif 

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                           


                                <!--News Place

                    <li class="dropdown">
                        
                        
                                <a href="/notifications" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    
                                 <i class="fa fa-notification">News</i>
                                    <span class="badge badge-light">3</span>


                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <li style="background-color: lightgray">
                                        <a href="#"></a>
                                       
                                    </li>

                                    
                                </ul>
                            </li>    -->



                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">


    <div class="row">
    @yield('content') 
    </div>
</div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}">
    console.log("today");
    </script>
</body>
</html>
