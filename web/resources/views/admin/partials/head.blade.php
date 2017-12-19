<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>VIS - Admin</title>


<link rel="stylesheet" href="{{ asset('_admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('_admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('_admin/bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- Theme style -->

<link rel="stylesheet" href="{{ asset('_admin/css/skins/skin-blue-light.min.css') }}">
<link rel="stylesheet" href="{{ asset('_admin/plugins/iCheck/all.css') }}">
<link rel="stylesheet" href="{{ asset('_admin/bower_components/select2/dist/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('_admin/css/adminlte.min.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="{{ asset('_admin/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('_admin/js/respond.min.js') }}"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
    .overlay{
        position: absolute;
        top: 50px;
        right: 30px;
        z-index: 60000;
    }
</style>
@yield('header-content')