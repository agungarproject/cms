<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.layouts.head')
</head>
<body class="sidebar-dark">
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
@yield('content')
        </div>
@include('admin.layouts.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@include('admin.layouts.seting')
  <!-- End custom js for this page-->
</body>

</html>

