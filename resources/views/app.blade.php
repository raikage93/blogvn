<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

    <!-- Navigation -->
    @include('user.layouts.navbar')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
   @include('user.layouts.header')

    <!-- Main Content -->
   @yield('content')

    <hr>

    <!-- Footer -->
    @include('user.layouts.footer')

    <!-- jQuery -->
    <script src="user/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="user/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="user/js/jqBootstrapValidation.js"></script>
    <script src="user/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="user/js/clean-blog.min.js"></script>

</body>

</html>
