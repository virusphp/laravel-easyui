@extends('layouts.master-app')
@section('title')
Dashboard
@endsection
@section('content')
<div class="easyui-tabs " data-options="tools:'#tab-tools'" style="height:auto;">
    <div title="About" style="padding:10px;height:800px" class="panel-body panel-body-noheader panel-body-noborder content-doc">
        <p style="font-size:14px">jQuery EasyUI framework helps you build your web pages easily.</p>
        <ul>
            <li>easyui is a collection of user-interface plugin based on jQuery.</li>
            <li>easyui provides essential functionality for building modem, interactive, javascript applications.</li>
            <li>using easyui you don't need to write many javascript code, you usually defines user-interface by writing some HTML markup.</li>
            <li>complete framework for HTML5 web page.</li>
            <li>easyui save your time and scales while developing your products.</li>
            <li>easyui is very easy but powerful.</li>
        </ul>
    </div>
  
    <div title="Iframe" data-options="closable:true" style="overflow:hidden">
        <iframe scrolling="yes" frameborder="0"  src="http://www.jeasyui.com/forum/index.php" style="width:100%;height:100%;"></iframe>
    </div>
</div>
@endsection