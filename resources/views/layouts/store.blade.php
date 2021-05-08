<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABO - Courier CRM</title>

    @include('store.partials.style')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">

@include('layouts.partials.preloader')

<!-- Navbar -->
@include('layouts.partials.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('store.components.aside')

<!-- Content Wrapper. Contains page content -->
@yield('store-content')
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layouts.partials.footer-admin')
</div>
<!-- ./wrapper -->

@include('store.partials.script')
</body>
</html>
