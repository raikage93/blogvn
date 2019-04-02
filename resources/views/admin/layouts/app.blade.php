<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layouts.head')
   @yield('css')
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.footer')
    </div>
  
</body>

@include('admin.layouts.java')
@yield('script')
</html>