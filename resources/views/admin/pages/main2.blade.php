<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.pages.head')
    </head>
    <body>

        <div id="wrapper">
            @include('admin.pages.header')
            @include('admin.pages.sidebar')

            <div id="page-wrapper">
                @yield('content')
            </div>
        </div>
        @include('admin.pages.footnav')
        @include('admin.pages.js2')
    </body>
</html>
