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
                                <h2 class="card-title">Categories</h2>

                                <div class="search">Search Category: 
                                    <input type="text" id="search" onkeyup=searchCategory()>
                                    <ul id="userList">
                                        
                                    </ul>
                                </div>

                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Sample Image </th>
                                        <th> Name </th>
                                        <th> Description </th>
                                        <th> View </th>
                                    </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($data as $id=>$cat)
                                            <tr>
                                                <td><img src="/category_images/{{$cat->image}}" alt="Sample Image" height="50px" width="50px"></td>
                                                <td>{{$cat->name}}</td>
                                                <td>{{$cat->description}}</td>
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