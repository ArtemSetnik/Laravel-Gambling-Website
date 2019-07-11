<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $page_title or "代理后台" }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ asset('/node_modules/admin-lte/dist/css/skins/skin-blue.min.css') }}">

    <link rel="stylesheet" href="{{ asset("/vendor/select2/select2.min.css") }}">
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('/node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('after.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
{{--@include('daili.layouts.topInfo')--}}
<div class="wrapper">

    <!-- Main Header -->
    @include('daili.layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('daili.layouts.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            @include('daili.layouts.alertMsg')
        </section>
        <!-- Content Header (Page header) -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('daili.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/node_modules/admin-lte/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ("/vendor/select2/select2.full.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/node_modules/admin-lte/dist/js/app.min.js') }}"></script>

<script src="{{ asset('/vendor/layer/layer.js') }}"></script>
<script src="{{ asset('/vendor/laydate/laydate.js') }}"></script>
<script src="{{ asset('/js/submitformsync.js') }}"></script>
<script src="{{ asset('/backstage/js/form_v.js') }}"></script>
@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
