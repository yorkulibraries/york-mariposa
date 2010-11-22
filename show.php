<?php exhibit_builder_exhibit_head(array('bodyclass' => 'exhibits')); ?>
<?php $current_page = exhibit_builder_get_current_page(); ?>

<h1><?= html_escape($exhibit->title)  ?>:  <span><?= html_escape($section->title) ?></span></h1>
<h3><?= neat_trim(strip_tags($section->description), 290) ?></h3>
<div class="spacer"></div>	
<h2 class="page_title"><?= $page->title ?></h2>
<div class="spacer"></div>
<div class="left_side">   					


<?php exhibit_builder_render_exhibit_page(); ?>
<div class="spacer"></div>
<script>
var idcomments_acct = 'ff00f3485d8f5fea3ca2e5450ac86e49';
var idcomments_post_id;
var idcomments_post_url;
</script>
<span id="IDCommentsPostTitle" style="display:none"></span>
<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>

</div>
<div class="right_side">
	<h3><span class="inner"><?php if (is_numeric($section->title)): ?>This Year <? else: ?> In This Section <? endif; ?> ...</span></h3>
	<div class="inner"><?php echo exhibit_builder_page_nav(); ?></div>	
    <div class="spacer"></div>
    <h3><span class="inner">By Year</span></h3>
     	<div id="year_selector" class="round">Select Year <a href="#"></a></div>
		<div id="exhibit_years" class="round">
		<?php foreach($exhibit->Sections as $section): ?>			                          
            <?php if (is_numeric(trim($section->title))): ?>
              <span class="round"><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></span>		
			<?php endif; ?>         
    	<?php endforeach; ?>
        <div class="clear"></div>	 
        </div>
    <h3><span class="inner">Browse</span></h3>
        <ul id="exhibit_sections">
    	<?php foreach($exhibit->Sections as $section): ?>			
                          
           <?php if (!is_numeric($section->title)): ?>
             <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
			<?php endif; ?>         
		<?php endforeach; ?>
        </ul>
        
        <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-logo.jpg')); ?>" alt="Image" />
   
</div>
	
<div class="clear"></div>	
<div class="spacer"></div>

<h2 class="page_title">
<?php echo exhibit_builder_link_to_previous_exhibit_page(); ?>
 ... 
<?php echo exhibit_builder_link_to_next_exhibit_page(); ?>
</h2>
<?php exhibit_builder_exhibit_foot(); ?>