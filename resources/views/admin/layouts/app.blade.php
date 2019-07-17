<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.leftbar')
        <div class="content-wrapper">
            @yield('content')
        </div>
          <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
    @include('admin.layouts.footer')
    </div>
{{--     @include('admin.media.popup.featured_image')
    @include('admin.media.popup.media_editor')
    @include('admin.media.popup.gallery_slider')
    @include('admin.layouts.notification') --}}
</body>
</html>
