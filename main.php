<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="inc/global.css" type="text/css" rel="stylesheet" >
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
<title>linkbin</title>
</head>

<body>
	<div class="greyback" id="bkg"></div>
	<div style="width: 100%;">
		<span style="font-size: 60px;">OICloud</span>
	</div>
	<div class="login_form" id="lg">
		<span>hehehe</span>
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