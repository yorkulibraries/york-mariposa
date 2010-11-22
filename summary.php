<?php exhibit_builder_exhibit_head(array('bodyclass' => 'exhibits')); ?>
		 
        <h1><?= $exhibit->title ?></h1>
		<h3 id="description_short"><?= neat_trim(strip_tags($exhibit->description), 200) ?> <span class="more" onclick="$('#description_text, #description_short').slideToggle('slow');">more</span></h3>
		<div id="description_text" style="display: none;">				
			<?= $exhibit->description ?> 
            <span class="more" onclick="$('#description_text, #description_short').slideToggle('slow');">hide</span>
        </div>
         
         <div class="spacer"></div>
     
 
<div id="loopedSlider">	
   	<ul class="pagination">
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>	
        <li><a href="#">3</a></li>
		<li><a href="#">4</a></li>	
        <li><a href="#">5</a></li>		
	</ul>
    <div class="clear"></div>
	<div class="container rounder bordered">
		<div class="slides">
			<div>
            <a href="#">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_1/ASC06361.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1814">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_1/ASC05994.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1740">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_1/ASC05920.jpg')); ?>" alt="Image" /></a>           
            </div>
			<div>
            <a href="http://archives.library.yorku.ca/items/show/1541">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_2/ASC06236.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1522">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_2/ASC06213.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1698">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_2/ASC05876.jpg')); ?>" alt="Image" /></a>
            </div>		
            <div>
            <a href="http://archives.library.yorku.ca/items/show/1527">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_3/ASC06221.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1760">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_3/ASC05940.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1745">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_3/ASC05925.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1744">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_3/ASC05924.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1334">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_3/ASC05650.jpg')); ?>" alt="Image" /></a>
            </div>		
            <div>
            <a href="http://archives.library.yorku.ca/items/show/1930">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_4/ASC06078.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1800">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_4/ASC05980.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1743">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_4/ASC05923.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1732">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_4/ASC05910.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1601">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_4/program1970thumbnail.jpg')); ?>" alt="Image" />
            </div>		
            <div>
            <a href="http://archives.library.yorku.ca/items/show/1687">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_5/ASC05865.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1660">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_5/ASC05823.jpg')); ?>" alt="Image" /></a>
            <a href="http://archives.library.yorku.ca/items/show/1289">
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-cycle/group_5/ASC05602.jpg')); ?>" alt="Image" /></a>
            </div>			
		</div>

	</div>	
	
</div>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#loopedSlider').loopedSlider();
	});
</script>

       
        <div class="clear"></div>
        
        <div class="left_side">
        <h2>Browse By Year</h2>
        
        <div class="spacer"></div>
		<div id="exhibit_years_large" class="round">
			<?php foreach($exhibit->Sections as $section): ?>			                          
            	<?php if (is_numeric(trim($section->title))): ?>
              	<span class="round"><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></span>		
				<?php endif; ?>         
    		<?php endforeach; ?>
        	<div class="clear"></div>	 
        </div>
        <h3>More</h3>
 		<ul id="exhibit_sections">
    	<?php foreach($exhibit->Sections as $section): ?>			
                          
           <?php if (!is_numeric($section->title)): ?>
             <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
			<?php endif; ?>         
		<?php endforeach; ?>
        </ul>
        
		
			<div class="clear"></div>
		</div>
        
        <div class="right_side">
        	
            <div class="spacer"></div>
            <div id="featured_item">
            
            	
			  <?php 
			  $featuredItem = random_featured_item(true);
			
			  while ($featuredItem->collection_id != 1) {
				 //echo "Changing Collection";
				  $featuredItem = random_featured_item(true);
			  }
			  
			  $html = '<h2>Featured Image</h2>';
 			  if ($featuredItem) {
 	   			 $itemTitle = item('Dublin Core', 'Title', array(), $featuredItem);
        		 
 	   			
 	  			if (item_has_thumbnail($featuredItem)) {
 	       			$html .= "<div style='padding: 10px;'>".	link_to_item(item_square_thumbnail(array(), 0, $featuredItem), array('class'=>'image'), 'show', $featuredItem) . "</div>";
 	  			}
 	   			
 			 } else {
 	   			$html .= '<p>No featured items are available.</p>';
 			 }

			  
			  echo $html ?>
            </div>
            <div class="spacer"></div>
            <div id="static_box">
            	<h4 class="inner">Credits</h4>
				<p class="inner"><?php echo html_escape($exhibit->credits); ?></p>
            </div>
            <div class="spacer"></div>
            <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/mariposa-logo.jpg')); ?>" alt="Image" />
            <div id="parners_box">
            	<h2>Partners</h2>
                <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/partners-logos/mariposa-foundation.jpg')); ?>" height="100" width="100" />
                <p>The Mariposa Folk Foundation</p>
                <p>&nbsp;</p>
                <img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/partners-logos/canadian-heritage.gif')); ?>" />
				<p>Department of Canadian Heritage</p>
                <p>&nbsp;</p>
				<img src="<?php echo html_escape(exhibit_builder_exhibit_img('images/partners-logos/canadian-council-of-archives.jpg')); ?>" />
               <p>Canadian Council of Archives</p>
            </div>
        </div>
        
		<div class="clear"></div>
        <div class="spacer"></div>
<?php exhibit_builder_exhibit_foot(); ?>