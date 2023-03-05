<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        @include('admin.css')

        <style type="text/css">  
            .title
            {
                color: white; 
                padding-top: 25px; 
                font-size: 25px;
            }

            label
            {
                display: inline-block;
                width: 200px;
            }
        </style>
  </head>
  <body>
        @include('admin.sidebar')
      <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                    <!-- <button type="button" class="close" data-dismiss="alert">X</button> -->

                </div>
                @endif

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <label for="">Product Title</label>
                    <input style="color: black" type="text" name="title" placeholder="Give a product title">
                </div>

                <div style="padding: 15px">
                    <label for="">Price</label>
                    <input style="color: black" type="number" name="price" placeholder="Give a price">
                </div>

                <div style="padding: 15px">
                    <label for="">Description</label>
                    <input style="color: black" type="text" name="des" placeholder="Give a product description">
                </div>

                <div style="padding: 15px">
                    <label for="">Quantity</label>
                    <input style="color: black" type="text" name="quantity" placeholder="Give a product quantity">
                </div>

                <div style="padding: 15px">
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">
                    <input class="btn btn-success" type="submit">
                </div>
            </form>
            </div>

        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>