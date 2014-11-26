<?php 
    $exhibit = get_current_record('exhibit', false); 
    $sections = get_exhibit_sections($exhibit);
    $featuredItem = random_featured_item(true, 1);
?>

<?php echo head(array('bodyclass' => 'exhibits', 'title' => $exhibit->title)); ?>		 

<h1><?= $exhibit->title ?></h1>
<h3 id="description_short"><?php echo neat_trim(strip_tags($exhibit->description), 200) ?> <span class="more" onclick="$('#description_text, #description_short').slideToggle('slow');">more</span></h3>
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
            <img src="<?php echo html_escape(img('mariposa-cycle/group_1/ASC06361.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1814">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_1/ASC05994.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1740">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_1/ASC05920.jpg')); ?>" alt="Image" /></a>           
            </div>
			<div>
            <a href="<?php echo url('items'); ?>/show/1541">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_2/ASC06236.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1522">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_2/ASC06213.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1698">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_2/ASC05876.jpg')); ?>" alt="Image" /></a>
            </div>		
            <div>
            <a href="<?php echo url('items'); ?>/show/1527">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_3/ASC06221.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1760">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_3/ASC05940.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1745">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_3/ASC05925.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1744">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_3/ASC05924.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1334">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_3/ASC05650.jpg')); ?>" alt="Image" /></a>
            </div>		
            <div>
            <a href="<?php echo url('items'); ?>/show/1930">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_4/ASC06078.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1800">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_4/ASC05980.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1743">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_4/ASC05923.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1732">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_4/ASC05910.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1601">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_4/program1970thumbnail.jpg')); ?>" alt="Image" />
            </div>		
            <div>
            <a href="<?php echo url('items'); ?>/show/1687">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_5/ASC05865.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1660">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_5/ASC05823.jpg')); ?>" alt="Image" /></a>
            <a href="<?php echo url('items'); ?>/show/1289">
            <img src="<?php echo html_escape(img('mariposa-cycle/group_5/ASC05602.jpg')); ?>" alt="Image" /></a>
            </div>			
		</div>
	</div>	
</div> <!-- end loopedSlider -->
       
<div class="clear"></div>
        
<div class="left_side">
    <h2>Browse By Year</h2>
    
    <div class="spacer"></div>
        
	<div id="exhibit_years_large" class="round">
		<?php foreach($sections as $section): ?>			                          
        	<?php if (is_numeric(trim($section->title))): ?>
          	<span class="round"><a href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></span>		
			<?php endif; ?>         
		<?php endforeach; ?>
		<div class="clear"></div>
    </div>
        
    <h3>More</h3>
        
 	<ul id="exhibit_sections">
	    <?php foreach($sections as $section): ?>
            <?php if (!is_numeric($section->title)): ?>
                <li><a class="exhibit_section" href="<?php echo exhibit_builder_exhibit_uri($exhibit, $section); ?>"><?php echo html_escape($section->title); ?></a></li>	
			<?php endif; ?>         
		<?php endforeach; ?>
    </ul>
    <div class="clear"></div>
</div> <!-- end left_side -->
        
<div class="right_side">        	
    <div class="spacer"></div>
    <div id="featured_item">
        <h2>Featured Image</h2>
        <div style="padding: 10px;">
            <?php if ($featuredItem) echo link_to_item(item_image('square_thumbnail', array(), 0, $featuredItem), array('class'=>'image'), 'show', $featuredItem); ?>
        </div>
    </div>
    <div class="spacer"></div>
    <div id="static_box">
    	<h4 class="inner">Credits</h4>
		<p class="inner"><?php echo html_escape($exhibit->credits); ?></p>
    </div>
    <div class="spacer"></div>
    <img src="<?php echo html_escape(img('mariposa-logo.jpg')); ?>" alt="Image" />
    <div id="parners_box">
    	<h2>Partners</h2>
        <img src="<?php echo html_escape(img('partners-logos/mariposa-foundation.jpg')); ?>" height="100" width="100" />
        <p>The Mariposa Folk Foundation</p>
        <p>&nbsp;</p>
        <img src="<?php echo html_escape(img('partners-logos/canadian-heritage.gif')); ?>" />
		<p>Department of Canadian Heritage</p>
        <p>&nbsp;</p>
		<img src="<?php echo html_escape(img('partners-logos/canadian-council-of-archives.jpg')); ?>" />
       <p>Canadian Council of Archives</p>
    </div>
</div> <!-- end right_side -->
        
<div class="clear"></div>
<div class="spacer"></div>
        
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#loopedSlider').loopedSlider();
	});
</script>
  
<?php echo foot(); ?>
