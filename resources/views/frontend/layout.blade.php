<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.head')
</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none">
    <i class="icofont-navigation-menu"></i>
  </button>

  <!-- ======= sidebar ======= -->
  @include('frontend.includes.sidebar')
  <!-- End sidebar -->

  <!-- Main -->
  @yield('main')
  <!-- End Main -->

  <!-- ======= Footer ======= -->
  @include('frontend.includes.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top">
    <i class="icofont-simple-up"></i>
  </a>

  <!-- Vendor JS Files -->
  @include('frontend.includes.scripts')

</body>

</html>