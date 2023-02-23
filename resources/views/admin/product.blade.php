<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .title
        {
            color:white;
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

      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
        <!-- navbar -->
            @include('admin.navbar')
        <!-- main-panel -->

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert">X</button>
                </div>

                @endif
                <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf

                <div style="padding: 15px;">
                    <label>Product Title</label>
                    <input style="color: black" type="text" name="title" placeholder="Give a Product Title" required="">
                </div>

                <div style="padding: 15px;">
                    <label>Price</label>
                    <input style="color: black" type="number" name="price" placeholder="Give a Price" required="">
                </div>

                <div style="padding: 15px;">
                    <label>Description</label>
                    <input style="color: black" type="text" name="des" placeholder="Give a Description" required="">
                </div>

                <div style="padding: 15px;">
                    <label>Quantity</label>
                    <input style="color: black" type="number" name="quantity" placeholder="Product Quantity" required="">
                </div>

                <div style="padding: 15px;">
                    <input style="color: black" type="file" name="file">
                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit">
                </div>
                </form>
            </div>
        </div>

        <!-- script -->
        @include('admin.script')
  </body>
</html>
