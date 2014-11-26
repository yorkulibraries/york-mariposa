<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo get_html_lang(); ?>">
<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if ( $description = option('description')): ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php endif; ?>

<?php
if (@$exhibit) {
    $titleParts[] = strip_formatting(@$exhibit->title);
} else if (isset($title)) {
    $titleParts[] = strip_formatting($title);
}
$titleParts[] = option('site_title');
?>
<title><?php echo implode(' &middot; ', $titleParts); ?></title>

<?php echo auto_discovery_link_tags(); ?>

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

<!-- Stylesheets -->
<?php 
    queue_css_file('main');
    queue_css_file('tabs');
    queue_css_file('looped-slider');
    echo head_css();
    
    echo theme_header_background();
?>

<!-- JavaScripts -->
<?php
  queue_js_file('js/jquery');
  queue_js_file('js/tabs');
  queue_js_file('js/main');
  queue_js_file('js/slider');
  echo head_js(); 
?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

	<div id="header">
    	<a href="<?php echo exhibit_builder_exhibit_uri(@$exhibit); ?>"><img id="logo" alt="yorku logo" border="0" src="<?php echo img('yorku-logo.gif'); ?>"/></a>
		<div id="topmenu">
         <div id="links">
		 	<a href="<?php echo exhibit_builder_exhibit_uri(@$exhibit); ?>">Mariposa</a> 
			<a href="<?php echo url('exhibits'); ?>">Exhibits</a>            
	        </div>
        </div>
    </div>
    
    <div id="content">
  		<div id="inner">
	
		<?php echo flash(); ?>	
