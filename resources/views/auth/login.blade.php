@extends('layouts.master-login')

@section('content')

<div class="easyui-panel" style="width:100%;max-width:400px;padding:30px 60px;">
	<header>
		<div class="m-toolbar">
			<span class="m-title">Login to System</span>
		</div>
	</header>
	<form id="ff" method="post">
		<div style="margin-bottom:20px">
			<input class="easyui-textbox" name="username" style="width:100%"
				data-options="label:'Username:',required:true">
		</div>
		<div style="margin-bottom:20px">
			<input class="easyui-textbox" name="password" style="width:100%"
				data-options="label:'password:',required:true,validType:'password'">
		</div>
	</form>
	<div style="text-align:right;padding:5px 0">
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Masuk</a>
	</div>
</div>
@endsection

@push("scripts")

<script>
	function submitForm(){
            $('#ff').form('submit');
        }
        function clearForm(){
            $('#ff').form('clear');
        }
</script>
@endpush