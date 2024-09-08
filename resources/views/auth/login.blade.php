@extends('layouts.master-login')

@section('content')

<div data-options="region:'center'">
	<div class="easyui-panel" data-options="style:{margin:'auto'}"
		style="width:100%;max-width:400px;padding:30px 60px;">
		<header>
			<div class="m-toolbar">
				<span class="m-title">Login to System</span>
			</div>
		</header>
		<form id="ff" method="post" action="{{ route('login') }}">
			@csrf
			<div style="margin-bottom:20px">
				<input class="easyui-textbox" type="email" name="email" style="width:100%"
					data-options="label:'Email:',required:true">
			</div>
			<div style="margin-bottom:20px">
				<input class="easyui-passwordbox" prompt="Password" iconWidth="20" name="password" style="width:100%"
					data-options="label:'Password:',required:true,validType:'password'">

			</div>
		</form>
		<div style="text-align:right;padding:5px 0">
			<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Masuk</a>
		</div>
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