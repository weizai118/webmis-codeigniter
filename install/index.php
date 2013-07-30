<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="kingsoul" />
	<title><?php echo $config['title'];?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href="install.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body">
	<div class="top">
		<div class="top_logo">&nbsp;</div>
		<span class="top_link">
			<a href="http://www.ksphp.com" target="_black" >官方网站</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="http://www.ksphp.com/document.html" target="_black" >WebMIS文档</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="http://www.ksphp.com/helps.html" target="_black" >帮助</a>
		</span>
	</div>
	<div class="ct">
		<div id="tab" class="ct_top"><span id="tab1" class="tab">服务条款</span>&nbsp;>&nbsp;<span id="tab2">环境安装</span>&nbsp;>&nbsp;<span id="tab3">系统配置</span>&nbsp;>&nbsp;<span id="tab4">完成</span></div>
		<!-- 安装说明 -->
		<div class="ct_ct">
			<div class="ct_ct_body">
			<table id="install">
				<tbody id="install1">
				<tr>
					<td class="logo">&nbsp;</td>
					<td>WebMIS-快速、实用、免费开源的PHP开发底层系统。基于CI的MVC模式开发的多用户、多权限解决方案，整合了Jquery、TinyMCE编辑器等插件、简洁美观的弹框效果；</td>
				</tr>
				<tr>
					<td colspan="2"><b>服务条款：</b></td>
				</tr>
				<tr>
					<td colspan="2" class="code in_term">服务条款</td>
				</tr>
				</tbody>
				<tbody id="install2" style="display: none;">
				<tr>
					<td colspan="2"><b>服务器环境配置：</b>必须开启重写</td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="left in_conf code">
							<b>[ Apache ]</b><br>
							开启重写<br><br>
							方法一：<br>
							[...]<br>
							&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All  #开启重写<br>
							&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks  #浏览目录<br>
							[...]
							方法二：<br>
							> a2enmod rewrite<br><br>
							然后配置“/”和“amin”下的 .htaccess 文件 <br>
						</div>
						<div class="right in_conf code">
							<b>[ Nginx ]</b><br>
							去除index.php<br><br>
							location / {<br>
							&nbsp;&nbsp;&nbsp;&nbsp;try_files $uri $uri/ /index.html;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;#Hide index.php<br>
							&nbsp;&nbsp;&nbsp;&nbsp;if (!-e $request_filename) {<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rewrite ^/(.*) /index.php last;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							}<br>
							location /admin/ {<br>
							&nbsp;&nbsp;&nbsp;&nbsp;try_files $uri $uri/ /index.html;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;#Hide index.php<br>
							&nbsp;&nbsp;&nbsp;&nbsp;if (!-e $request_filename) {<br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rewrite ^/admin/(.*) /admin/index.php last;<br>
							&nbsp;&nbsp;&nbsp;&nbsp;}<br>
							}<br>
						</div>
					</td>
				</tr>
				</tbody>
				<tbody id="install3" style="display: none;">
				<tr>
					<td colspan="2"><b>文件是否可写：</b></td>
				</tr>
				<tr>
					<td colspan="2" id="isWrite" class="code">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2"><b>MySQL数据库配置：</b></td>
				</tr>
				<tr>
					<td colspan="2" id="dataBase" class="code">
						账户：&nbsp;&nbsp; <input type="text" class="input" style="width: 100px;" value="root">&nbsp;&nbsp;
						密码：&nbsp;&nbsp; <input type="password" class="input" style="width: 160px;">&nbsp;&nbsp;
						<a href="#" id="dataBaseTest" class="an">连接</a>
						<div class="err">&nbsp;</div>
					</td>
				</tr>
				<tr>
					<td colspan="2"><b>系统管理员：</b></td>
				</tr>
				<tr>
					<td colspan="2" id="Admin" class="code">
						账户：&nbsp;&nbsp; <input type="text" class="input" style="width: 100px;" value="admin">&nbsp;&nbsp;<br><br>
						密码：&nbsp;&nbsp; <input type="password" class="input" style="width: 180px;">&nbsp;&nbsp;<br><br>
						确认：&nbsp;&nbsp; <input type="password" class="input" style="width: 180px;">&nbsp;&nbsp;
					</td>
				</tr>
				</tbody>
			</table>
			</div>
		</div>
		<!-- 安装说明 End -->
		<div id="button" class="ct_bt">
			<font class="ct_bt_msg">提示：如果看不出“圆角框”，请升级或更换浏览器！</font>
			<span id="button1" class="ct_bt_an" style="display: block;">
				<label><input type="checkbox" />&nbsp;&nbsp;同意服务条款</label>&nbsp;&nbsp;
				<a href="#" class="an" onclick="Next(2);return false;" style="display: none;">下一步</a>
			</span>
			<span id="button2" class="ct_bt_an">
				<a href="#" class="an" onclick="Next(1);return false;">上一步</a>&nbsp;&nbsp;<a href="#" class="an" onclick="Next(3);return false;">下一步</a>
			</span>
			<span id="button3" class="ct_bt_an">
				<a href="#" class="an" onclick="Next(2);return false;">上一步</a>&nbsp;&nbsp;<a href="#" class="an" onclick="Next(4);return false;">下一步</a>
			</span>
			<span id="button4" class="ct_bt_an">
				<a href="../index.php" class="an">完成</a>
			</span>
		</div>
	</div>
	<div class="copy">Built by KSPHP and the <a href="http://www.ksphp.com" >KSPHP.COM</a> community</div>
</div>
<script language="javascript" src="../webmis/plugin/jquery/jquery-1.10.2.min.js"></script>
<script language="javascript" src="install.js"></script>
</body>
</html>