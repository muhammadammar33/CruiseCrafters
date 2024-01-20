<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
    </head>
    <body>
        <div class="container-scroller">

            @include('admin.sidebar')

            <div class="container-fluid page-body-wrapper">
                
                @include('admin.nav')

                @include('admin.main')

                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>