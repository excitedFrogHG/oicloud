<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="inc/global.css" type="text/css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script>
	function displayForm(divid){
		document.getElementById(divid).style.display="block";
		document.getElementById('bkg').style.display="block";
	}
	function hideForm(divid){
		document.getElementById(divid).style.display="none";
		document.getElementById('bkg').style.display="none";
	}
	
</script>
<title>OICloud</title>
</head>

<body>
	<div class="greyback" id="bkg"></div>
	<div style="width: 100%;">
		<span style="font-size: 60px;">OICloud</span>
	</div>
	<div class="login_form" id="lg">
		<form id="lgForm">
			<div class="input-group">
				<span class="input-group-addon">用户名：</span>
				<input class="form-control" type="text" id="lgForm_usr">
			</div>
				<br>
			<div class="input-group">
				<span class="input-group-addon">密码：</span>
				<input class="form-control" type="password" id="lgForm_psw">
			</div>
			<br>
			<button class="btn btn-success" type="button" onClick="chkLoginForm();">Log in</button>
		</form>
		<br>
		<span onClick="hideForm('lg');" class="ll">关闭窗口</span>
	</div>
	<div style="width: 20%">
		<div style="margin: 20px;">
		<a href="#" class="btn-green" onClick="displayForm('lg');"><span>Sign in</span></a>
		</div>
		<div style="margin: 20px;">
		<a href="#" class="btn-green"><span>Sign up</span></a>
		</div>
	</div>
</body>
</html>