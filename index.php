<!DOCTYPE html>
<html>
<style>
	body {padding-top: 50px;}
	.main .page-header {margin-top: 0;}
</style>
<head>
	<meta charset="utf-8">
	<title>RuntimeValidator</title>
	<!-- Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">RuntimeValidator Project</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="javascript:alert('About');">About</a></li>
				<li><a href="javascript:alert('Contact');">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<h1>Examples</h1>
		</div>
		<div-example>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Money</label>
					<div class="col-sm-5">
						<!-- 只需要在class中添加对应校验类，例如下面的“_inputMoney” -->
						<input class="_inputMoney form-control" placeholder="example：3.36">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Number</label>
					<div class="col-sm-5">
						<input class="_inputNumber form-control" placeholder="example：0123456789">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Positive Number</label>
					<div class="col-sm-5">
						<input class="_inputPositiveNumber form-control" placeholder="example：123456789">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Chinese</label>
					<div class="col-sm-5">
						<input class="_inputChinese form-control" placeholder="example：中文字">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Email</label>
					<div class="col-sm-5">
						<input class="_inputEmail form-control" placeholder="example：email">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Input Variable</label>
					<div class="col-sm-5">
						<input class="_inputVariable form-control" placeholder="example：Abc_123">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
	
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!-- 最新的 RuntimeValidator 核心 JavaScript 文件 -->
<script type="text/javascript" src="./runtime_validator.js"></script>
<script>
$(function(){
	// 默认校验规则
	defaultInputValidator();
})
</script>
</html>