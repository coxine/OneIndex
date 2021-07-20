<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?></title>
	<link rel="shortcut icon" href="/view/nexmoe/favicon.ico">
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<link rel="stylesheet" href="/view/nexmoe/style.css">
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue" style="font-family:ceym">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=3301696646&s=100"/></a>
			<div class="navRight">
				<ul class="navul">
					<li class="navli"><a href="//newtea.ml" target="_blank">新茶博客</a></li>
					<li class="navli"><a href="//bbs.newtea.ml">新茶论坛</a></li>
					<li class="navli"><a href="//costg.cf">余弦官网</a></li>
					<li class="navli"><a href="//voice.costg.cf">余弦之声</a></li>
					<li class="navli"><a href="/admin">管理区</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
	<div class="disp-none">
	<a href="https://www.costg.cf/">天国网</a>
	</div>
</body>
</html>