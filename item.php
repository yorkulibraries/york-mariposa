<?php exhibit_builder_exhibit_head(array('bodyclass' => 'exhibits')); ?>


	<h1 class="item_title"><?php echo item('Dublin Core', 'Title'); ?></h1>
	<h2><?= html_escape($exhibit->title)  ?>:  <span><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?= html_escape($section->title) ?></a></span></h2>
    <h3><?php echo item('Dublin Core', 'Description'); ?></h3>
    
    <div class="spacer"></div>
   
   
   	<div class="left_side">
			
	    <div id="itemfiles">
			<?php echo display_files_for_item(); ?>
		</div>
            
        <div class="spacer"></div>    
        <ul class="jq_simple_tabs">
            <li><a href="#tab1">Description</a></li>
            <li><a href="#tab2">Dublin Core</a></li>
            <li><a href="#tab3">Cite</a></li>
        </ul>
     
        <div class="jq_simple_tab_container">
            <div id="tab1" class="jq_simple_tab_content">
               
                <h3>Description</h3>
                <?php echo item('Dublin Core', 'Description'); ?>
                <h3>Subject</h3>
                <?php echo item('Dublin Core', 'Subject'); ?>
                <h3>Date</h3>
                <?php echo item('Dublin Core', 'Date'); ?>
                
                <h3>All Titles</h3>
                <ul>
                <?php foreach (item('Dublin Core', 'Title', 'all') as $title): ?>
               <li class="item-title">
               <?php echo $title; ?>
               </li>
                 <?php endforeach ?>
                </ul>
                
                
            </div>
            <div id="tab2" class="jq_simple_tab_content">
              
              <?php echo show_item_metadata(); ?>
            </div>
            <div id="tab3" class="jq_simple_tab_content">
               
                <h3>Citation</h3>
                <div id="citation-value" class="field-value"><?php echo item_citation(); ?></div>
            </div>
        </div>
    
    
    	<div class="spacer"></div>
        <script>
var idcomments_acct = 'ff00f3485d8f5fea3ca2e5450ac86e49';
var idcomments_post_id;
var idcomments_post_url;
</script>
<span id="IDCommentsPostTitle" style="display:none"></span>
<script type='text/javascript' src='http://www.intensedebate.com/js/genericCommentWrapperV2.js'></script>
<div class="spacer"></div>
            
       
		
		
    </div>
    
    <div class="right_side">
    	         
        <h3><span class="inner">Pages...</span></h3>
		<div class="inner"><?php echo exhibit_builder_page_nav(); ?></div>	
        
        <?php if(count($item->Tags)): ?>
		<h3><span class="inner">Tags</span></h3>
        <div class="tags inner">
		   <?php echo item_tags_as_string(); ?>	
		</div>
		<?php endif;?>
        
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
   
   
			

<?php exhibit_builder_exhibit_foot(); ?>