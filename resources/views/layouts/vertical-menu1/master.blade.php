<!DOCTYPE html>
<html lang="<?php echo Session::get('locale');?>" dir="ltr">
    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="MedPro">
        <meta name="author" content="Mindcrew Technologies">
        <meta name="keywords" content="dashboard, admin, ">
       <!--  dashboard template, admin template, laravel, php laravel, laravel bootstrap, laravel admin template, bootstrap laravel, bootstrap in laravel, laravel dashboard template, laravel admin, laravel dashboard, laravel blade template, php admin
 -->
        @include('layouts.vertical-menu1.head')

    </head>

    <body class="app sidebar-mini">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
         <div class="page">
            <div class="page-main">

                @include('layouts.vertical-menu1.app-sidebar')

                @include('layouts.vertical-menu1.mobile-header')

                <div class="app-content">
                    <div class="side-app">

                        <div class="page-header">
                        @yield('page-header')
                        @include('layouts.vertical-menu1.notification')
                        </div>

                        @yield('content')

            @include('layouts.vertical-menu1.sidebar')

            @include('layouts.vertical-menu1.footer')

        </div>

            @include('layouts.vertical-menu1.footer-scripts')

    </body>
</html>
