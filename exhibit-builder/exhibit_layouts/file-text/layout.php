<div class="exhibit-item">
    <?php foreach ($attachments as $attachment): ?>
        <?php echo $this->exhibitAttachment($attachment, array('imageSize' => 'thumbnail')); ?>
        <div class="exhibit-item-title">
        <a href="<?= exhibit_builder_exhibit_item_uri($attachment->getItem())?>">
            <?php echo metadata($attachment->getItem(), array('Dublin Core', 'Title')); ?>
        </a>
        </div>
        <?php if($text): ?>
        <div class="exhibit-text">
            <?php echo $text; ?>
        </div>
        <?php endif ?>
    <?php endforeach; ?>
</div>
