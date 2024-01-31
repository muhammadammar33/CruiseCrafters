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
                    <div class="cat_form">
                        <form class="cate-form" action="{{route('add_category')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            <h2 class="cat-head">Add Category</h2>

                            <label class="cat-label" for="categoryName">Category Name:</label>
                            <input class="cat-input" type="text" id="categoryName" name="name" required>

                            <label class="cat-label" for="categoryDescription">Category Description:</label>
                            <textarea class="cat-input" id="categoryDescription" name="description" rows="4" required></textarea>
                            
                            <label class="cat-label" for="categoryImage">Category Description:</label>
                            <input class="cat-image" type="file" id="categoryImage" name="image" required>

                            <button class="cat-button" type="submit">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.js')
    </body>
</html>