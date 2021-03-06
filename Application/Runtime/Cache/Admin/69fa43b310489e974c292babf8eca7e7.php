<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">欢迎使用H-ui.admin <span class="f-14">v3.0</span>后台模版！</p>
	<p>登录次数：<?php echo ($total); ?> </p>
	<p>上次登录IP：<?php echo ($last_log['log_ip']); ?>  上次登录时间：<?php echo (date("Y-m-d h:i:s",$last_log['log_time'])); ?></p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">访问统计</th>
			</tr>
			<tr class="text-c">
				<th>统计</th>
				<th>总访问量</th>
				<th>有效访问量</th>
				<th>访问的IP数</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>今日</td>
				<?php if(is_array($today)): foreach($today as $key=>$v): ?><td><?php echo ($v); ?></td><?php endforeach; endif; ?>
			</tr>
			<tr class="text-c">
				<td>昨日</td>
				<?php if(is_array($yesterday)): foreach($yesterday as $key=>$v): ?><td><?php echo ($v); ?></td><?php endforeach; endif; ?>
			</tr>
			<tr class="text-c">
				<td>本周</td>
				<?php if(is_array($week)): foreach($week as $key=>$v): ?><td><?php echo ($v); ?></td><?php endforeach; endif; ?>
			</tr>
			<tr class="text-c">
				<td>本月</td>
				<?php if(is_array($month)): foreach($month as $key=>$v): ?><td><?php echo ($v); ?></td><?php endforeach; endif; ?>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName"><?php echo ($_SERVER['SERVER_NAME']); ?></span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td><?php echo ($_SERVER['SERVER_ADDR']); ?></td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td><?php echo ($_SERVER['HTTP_HOST']); ?></td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td><?php echo ($_SERVER['SERVER_PORT']); ?></td>
			</tr>
		</tbody>
	</table>
</div>

<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
</body>
</html>