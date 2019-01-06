<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://cdn.bootcss.com/twitter-bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="inc/global.css" rel="stylesheet">
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
	<div class="pop_form" id="lg">
		<form id="lgForm">
			<div class="input-group">
				<span class="input-group-addon">账户：</span>
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
	<div class="pop_form form-horizontal" id="rg">
		<form id="rgForm">
			<div class="input-group">
				<span class="input-group-addon">账户：</span>
				<input class="form-control" type="text" id="rgForm_usr">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon">关联邮箱：</span>
				<input class="form-control" type="password" id="rgForm_email">
			</div>
			<br>
			<button class="btn btn-success" type="button" onClick="chkRegForm();">下一步</button>
			<div class="form-group" id="nextStep" style="width: 80%%">
				<label class="control-label col-sm-5">E-mail验证码：</label>
				<input class="form-control" style="width: 30%" type="text" id="rgForm_verify">
				<label class="col-sm-10"><a href="#">没有收到？</a></label>
			</div>
			<br>
		</form>
		<br>
		<span onClick="hideForm('rg');" class="ll">关闭窗口</span>
	</div>
	<div class="col-md-5">
		<div style="margin: 20px;">
		<a href="#" class="btn-green" onClick="displayForm('lg');"><span>Sign in</span></a>
		</div>
		<div style="margin: 20px;">
		<a href="#" class="btn-green" onClick="displayForm('rg');"><span>Sign up</span></a>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-5">
		<span>网站消息</span>
		
	</div>
</body>
</html>