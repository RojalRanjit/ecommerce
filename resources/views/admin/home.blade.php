<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
        <!-- navbar -->
            @include('admin.navbar')
        <!-- main-panel -->
            @include('admin.body')
      <!-- script -->
    @include('admin.script')
  </body>
</html>
