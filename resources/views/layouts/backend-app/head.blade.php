<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="{{ config('app.name') }}" content="yes">
<meta name="{{ config('app.name') }}" content="black">
<meta content="{{ config('app.name') }} by Raden Parhanudin" name="description" />
<meta content="Raden Parhanudin" name="author" />
<title>{{ config('app.name') }}</title>
<link rel="stylesheet" href="{{ asset('public/layouts/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/layouts/bower_components/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/layouts/bower_components/Ionicons/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/layouts/dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/layouts/dist/css/customize.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/layouts/dist/css/skins/_all-skins.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@stack('plugins-css')
<base href="{{ url('/') }}">