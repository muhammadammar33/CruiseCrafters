<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
    </head>
    <body>
        <div class="container-scroller">

            @include('admin.sidebar')

            @include('admin.nav')

            @include('admin.main')
        </div>
        @include('admin.js')
    </body>
</html>