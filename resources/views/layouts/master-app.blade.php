<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href={{ asset('template/themes/default/easyui.css') }}>
	<link rel="stylesheet" type="text/css" href={{ asset("template/themes/icon.css") }}>
	<script type="text/javascript" src={{ asset("template/jquery.min.js") }}></script>
	<script type="text/javascript" src={{ asset("template/jquery.easyui.min.js") }}></script>
    @stack('css')
</head>
<body style="margin:0;">
    <div class="panel layout-panel layout-panel-north panel-htop" style="width: 100%;">
        <div data-options="region:'north'" style="height:50px;margin:0;padding:0;"> 
            @include('layouts.partials.menu-atas')
        </div>
    </div>

    <div class="panel layout-panel layout-panel-center panel-htop" style="top: 45px;">
        <div data-options="region:'center'">
            @yield('content')
        </div>
    </div>

    @stack('scripts')
 
</body>
</html>