<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        @yield('page_title')

        <!-- Main Styles -->
        @include('back.inc.styles')
    </head>

    <body>
        @include('back.inc.menu')
        <!-- /.main-menu -->

        @include('back.inc.navbar')
        @yield('back_layout')
        @include('back.inc.scripts')
    </body>
</html>