GenCode简介
>
	项目开发过程中的对于input的各种输入校验总是令人不胜其烦，在前端通常我们会在表单提交之前统一校验，这样做首先是繁琐，其次是容易遗漏出错。
	最好，最简单，最体验的方式应该是在用户输入了错误的数据后，自动去除错误数据。
	RuntimeValidator便是由此而生，利用jquery动态实时校验用户输入。只需要引入一个js文件，然后在input上加一个class就OK了。
	是不是很简单，赶紧试一下，畅爽无比！

代码层次
>
	index.php是测试显示用html文件
	runtime_validator.js是核心源码

配置层次
>
	1、在您的html页面中，引入JS文件：<script type="text/javascript" src="./runtime_validator.js"></script>
	2、在您的html页面中，调用一下校验入口函数：
	<script>
		$(function(){
			defaultInputValidator();
		})
	</script>
	3、在您的input里，class写上需要校验的类型：<input class="_inputNumber" />
注意事项2
>
	 
