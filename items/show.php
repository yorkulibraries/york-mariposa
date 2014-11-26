<?php 
    $exhibit = get_current_record('exhibit', false);
    $sections = get_exhibit_sections($exhibit);
?>

<?php echo head(array('bodyclass' => 'exhibits', 'exhibit' => $exhibit)); ?>

<h1 class="item_title"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

<h2><?= html_escape($exhibit->title)  ?></h2>

<h3><?php echo metadata('item', array('Dublin Core', 'Description')); ?></h3>
    
<div class="spacer"></div>
      
<div class="left_side">
			
    <!-- The following returns all of the files associated with an item. -->
    <?php if (metadata('item', 'has files')): ?>
    <div id="itemfiles" class="element">
        <?php if (get_theme_option('Item FileGallery') == 1): ?>
        <div class="element-text"><?php echo item_image_gallery(); ?></div>
        <?php else: ?>
        <div class="element-text"><?php echo files_for_item(); ?></div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
            
    <div class="spacer"></div>    

    <ul class="jq_simple_tabs">
        <li><a href="#tab1">Description</a></li>
        <li><a href="#tab2">Dublin Core</a></li>
        <li><a href="#tab3">Cite</a></li>
    </ul>
     
    <div class="jq_simple_tab_container">
        <div id="tab1" class="jq_simple_tab_content">
            <h3>Description</h3>
            <?php echo metadata('item', array('Dublin Core', 'Description')); ?>
        
            <h3>Subject</h3>
            <?php echo metadata('item', array('Dublin Core', 'Subject')); ?>
        
            <h3>Date</h3>
            <?php echo metadata('item', array('Dublin Core', 'Date')); ?>
        
            <h3>All Titles</h3>
            <ul>
                <?php foreach (metadata('item', array('Dublin Core', 'Title'), array('all' => true)) as $title): ?>
                    <li class="item-title"><?php echo $title; ?></li>
                <?php endforeach ?>
            </ul>
        </div>

        <div id="tab2" class="jq_simple_tab_content">
            <?php echo all_element_texts('item'); ?>
        </div>

        <div id="tab3" class="jq_simple_tab_content">
            <h3>Citation</h3>
            <div id="citation-value" class="field-value"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
        </div>
    </div>

    <div class="spacer"></div>

    <script>
    var idcomments_acct = 'ff00f3485d8f5fea3ca2e5450ac86e49';
    var idcomments_post_id;
    var idcomments_post_url;
    </script>
    <span id="IDCommentsPostTitle" style="display:none"></span>
    <script type="text/javascript" src="http://www.intensedebate.com/js/genericCommentWrapperV2.js"></script>
    
    <div class="spacer"></div>

</div> <!-- end left_side -->
    
<div class="right_side">

    <h3><span class="inner">Pages...</span></h3>
    <div class="inner"><?php //echo exhibit_builder_page_nav(); ?></div>	

    <?php if (metadata('item', 'has tags')): ?>
    <h3><span class="inner">Tags</span></h3>
    <div class="tags inner">
	   <?php echo  tag_string('item'); ?>	
	</div>
    <?php endif;?>
        
    <div class="spacer"></div>
    
    <h3><span class="inner">By Year</span></h3>
    
    <div id="year_selector" class="round">Select Year <a href="#"></a></div>
    <div id="exhibit_years" class="round">
		<?php foreach($sections as $section): ?>
            <?php if (is_numeric(trim($section->title))): ?>
                <span class="round"><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></span>		
			<?php endif; ?>         
    	<?php endforeach; ?>
        <div class="clear"></div>	 
    </div>
    
    <h3><span class="inner">Browse</span></h3>
    <ul id="exhibit_sections">
        <?php foreach($sections as $section): ?>			
            <?php if (!is_numeric($section->title)): ?>
                <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
            <?php endif; ?>         
        <?php endforeach; ?>
    </ul>

    <img src="<?php echo html_escape(img('mariposa-logo.jpg')); ?>" alt="Mariposa Logo" />
         
</div> <!-- end right_side -->

<div class="clear"></div>

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<?php echo foot(); ?>
