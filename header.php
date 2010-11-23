<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= $exhibit->title ?> | <?php echo settings('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/main')); ?>" />
<link rel="stylesheet" media="print" href="<?php echo html_escape(css('print')); ?>" />
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/tabs')); ?>" />
<link rel="stylesheet" media="screen" href="<?php echo html_escape(exhibit_builder_exhibit_css('css/looped-slider')); ?>" />
<!-- JavaScripts -->
<?php echo exhibit_builder_exhibit_js('js/jquery') ?>
<?php echo exhibit_builder_exhibit_js('js/tabs') ?>
<?php echo exhibit_builder_exhibit_js('js/main') ?>
<?php echo exhibit_builder_exhibit_js('js/slider') ?>
<!-- Plugin Stuff -->
<?php plugin_header(); ?>

</head>


<body>
	<div id="header">
    	<a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>"><img id="logo" alt="<?= $exhibit->title ?>" border="0" src="<?php echo html_escape(exhibit_builder_exhibit_img('images/yorku-logo.gif')); ?>"/></a>
		<div id="topmenu">
         <div id="links">
		 	<a href="<?php echo exhibit_builder_exhibit_uri($exhibit); ?>">Mariposa</a> 
			<a href="<?php echo html_escape(uri('exhibits')); ?>">Exhibits</a>            
	        </div>
        </div>
    </div>
    
    <div id="content">
  		<div id="inner">
	
		<?php echo flash(); ?>	