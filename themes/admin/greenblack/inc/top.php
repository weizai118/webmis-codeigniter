<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Unknown" />
	<title><?php echo $this->config->config['title'];?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link href="<?php echo base_url('../webmis/themes/'.$this->config->config['webmis_themes'].'/webmis.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('../themes/admin/'.$this->config->config['admin_themes'].'/admin.css'); ?>" rel="stylesheet" type="text/css" />
	<script language="javascript" src="<?php echo base_url('../webmis/plugin/jquery/jquery-2.min.js'); ?>"></script>
	<script language="javascript" src="<?php echo base_url('../webmis/jquery.webmis.js'); ?>"></script>
<?php if(@$LoadCSS){foreach($LoadCSS as $val){ ?>
	<link href="<?php echo base_url('../themes/admin/'.$this->config->config['admin_themes'].'/css/'.$val); ?>" rel="stylesheet" type="text/css" />
<?php }}?>
</head>

<body class="top_bg">
<?php if($isIE){?>
	<div class="isIE"><p><?php echo $this->lang->line('inc_isIE');?></p></div>
<?php }?>
<header class="top_ct">
	<div class="top_logo"><a href="http://www.ksphp.com" title="WebMIS" target="_blank">&nbsp;</a></div>
	<ul class="nav">
<?php
$menus = FALSE;
foreach ($Menus['Date'] as $val){
	$an = $val['id']==$Menus['FID']['FID1']?'nav_an1':'nav_an2';
	$ico = $val['ico']?'<em class="'.$val['ico'].'"></em>':'';
	$title = $this->lang->line($val['title']);
	$title = $title?$title:$val['title'];
	if(@$val['menus']){$menus = $val['menus'];}
?>
		<li><a href="<?php echo base_url($val['url'].'.html');?>" class="<?php echo $an;?>"><?php echo $ico.$title;?></a></li>
<?php }?>
	</ul>
	<span class="top_link"><?php echo $Menus['userHtml'];?></span>
</header>
<section class="ct_body">
	<aside class="ct_left">
<?php if($menus){foreach ($menus as $val1){
	//$class = $val1['id']==$Menus['FID']['FID2']?'left_menu_an1':'left_menu_an2';
	$title = $this->lang->line($val1['title']);
	$title = $title?$title:$val1['title'];
?>
		<div class="left_title" onclick="menuTwo('<?php echo $val1['id'];?>',$(this))"><em class="<?php echo $val1['ico'];?>"></em><?php echo $title;?></div>
		<ul class="left_list" id="menuThree_<?php echo $val1['id'];?>">
<?php if(@$val1['menus']){foreach ($val1['menus'] as $val2){
	$an = $val2['id']==$Menus['FID']['FID3']?'left_an1':'left_an2';
	$ico = $val2['ico']?'<em class="'.$val2['ico'].'"></em>':'';
	$title = $this->lang->line($val2['title']);
	$title = $title?$title:$val2['title'];
?>
			<li><a href="<?php echo base_url($val2['url'].'.html');?>" class="<?php echo $an;?>"><?php echo $ico.$title;?></a></li>
<?php }}?>
		</ul>
<?php }}?>
		<div class="left_copy"><?php echo 'WebMIS '.$this->config->config['version_admin'].' &copy; '.$this->config->config['copy'];?></div>
	</aside>
	<section class="ct_right">
