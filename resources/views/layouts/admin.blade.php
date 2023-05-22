<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   {{config('app.name','Laravel')}}
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
  
  <link href="{{asset('admin/css/material-dashboard.css')}}">
 
</head>

<body>

  <div class="wrapper">
    @include('layouts.inc.sidebar')

    <div class="main-panel">
      @include('layouts.inc.adminnav')

      <div class="content">
        @yield('content')

      </div>
      @include('layouts.inc.adminfooter')

    </div>

  </div>
    

  <!--   Core JS Files   -->
  <script src="{{asset('admin/js/popper.min.js')}}" defer></script>
  <script src="{{asset('admin/js/bootstrap.min.js')}}" defer></script>
  <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}" defer></script>
  <script src="{{asset('admin/js/smooth-scrollbar.min.js')}}" defer></script>
  <script src="{{asset('admin/js/chartjs.min.js')}}" defer></script>

  @yield('scripts')
  
</body>

</html>