<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <script src="JS/script.js"></script>
    </head>
    <body>
        <div class="container-scroller">

            @include('admin.sidebar')

            @include('admin.nav')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Users</h2>

                                <div class="search">Search User: 
                                    <input type="text" id="search" onkeyup=search()>
                                    <ul id="userList">
                                        
                                    </ul>
                                </div>

                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Profile Pic </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Address </th>
                                        <th> View </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($data as $id=>$user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td><img src="" height="50px" width="50px"></td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->address}}</td>
                                                <td><a href="" class="badge badge-outline-primary">View</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>