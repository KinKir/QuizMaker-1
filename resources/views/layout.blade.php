<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="/css/style.css"  media="screen,projection"/>
    <link href="/css/resultstyle.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="/css/media.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <script src="/js/canvasjs.min.js"></script>
    <script type="text/javascript" src="/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>

  </head>
  <body>
    <!--  ////////////////////////////////////////////////////////////// Start Navbar Design //////////////////////////////////////////////// -->
    <nav class="blue darken-1">
      <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse left" id="slide-nav"><i class="material-icons">toc</i></a>
        <a href="/" id="A_1"><i id="I_2">school</i> LearnPlus</a>

        <!--  Start Navbar Search  -->
        @yield('search')
        <!--  End Navbar Search  -->

        <!--  Start Navbar Link  -->
       @yield('navbarlinks')
        <!--  End Navbar Links -->

        <!--  Start Navbar Slide Nav -->
        <ul id="slide-out" class="side-nav">
        <div class="sidebar-heading">APPLICATIONS</div>
        <li><a href="/admin/login" class=""><i class="sidebar-menu-icon material-icons left">school</i>Instructor</a></li>
        <li><a href="/" class=""><i class="sidebar-menu-icon material-icons left">account_box</i>Student</a></li>



         @yield('side-nav')
        </ul>
        <!--  End Navbar Slide Nav -->

       <!--  Start Profile DropDown -->
        <ul id="dropdown1" class="dropdown-content right">
          <li><a href="/user/editaccount">Edit Account</a></li>
          <li class="divider"></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
        @if(Auth::check())
        @if( Auth::user()->user_img == "")
        <li><a class="dropdown-button right" href="#!" data-activates="dropdown1"><img src=/images/user.png alt="Avatar" class="circle  profile-photo" height="40" width="40"><i class="material-icons right">arrow_drop_down</i></a></li>
       <!--  End Profile DropDown -->
        @else
          <li><a class="dropdown-button right" href="#!" data-activates="dropdown1"><img src=/images/{{ Auth::user()->user_img}} alt="Avatar" class="circle  profile-photo" height="40" width="40"><i class="material-icons right">arrow_drop_down</i></a></li>
 @endif
       @else
       <li><a href="/login" class="right">Login</a></li>
 @endif
      </div>
    </nav>

    <!--  ////////////////////////////////////////////////////////////// End Navbar Design //////////////////////////////////////////////// -->


        <div class="container-content">
         @yield('content')
         </div>



    <!--Import jQuery before materialize.js-->

  </body>
</html>
<script>
$(".button-collapse").sideNav();
$('.button-collapse').sideNav({
menuWidth: 300, // Default is 240
edge: 'left', // Choose the horizontal origin
closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
  }
  );
  // Show sideNav
  $('.button-collapse').sideNav('show');
  // Hide sideNav
  $('.button-collapse').sideNav('hide');
  </script>
