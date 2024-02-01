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

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-scroller">
                        <div class="container-fluid page-body-wrapper full-page-wrapper">
                            <div class="row w-100 m-0">
                            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth" style="background-image: url(/Images/Cat.jpg)">
                                <div class="card col-lg-4 mx-auto">
                                <div class="card-body px-5 py-5">
                                    <h3 class="card-title text-left mb-3">Add Category</h3>
                                    <form class="cate-form" action="{{route('add_category')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="form-group">
                                        <label for="categoryName">Category Name</label>
                                        <input type="text" class="cat-input" id="categoryName" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="categoryDescription">Category Description</label>
                                        <textarea class="cat-input" id="categoryDescription" name="description" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="cat-label" for="categoryImage">Category Image</label>
                                        <input class="cat-image" type="file" id="categoryImage" name="image" required>
                                    </div>
                                    <button class="cat-button" type="submit">Add Category</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- content-wrapper ends -->
                            </div>
                            <!-- row ends -->
                        </div>
                        <!-- page-body-wrapper ends -->
                    </div>
                </div>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>