<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div class="promotion_content">
    <?php foreach ($rows as $row) :?>
        <div class="promotion_list">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-5 col-md-offset-1 col-md-4">
                <?php echo $row['field_promotion_image'];?>
            </div>
            <div class="col-xs-12 col-sm-offset-0 col-sm-7 col-md-6">
                <div class="promotion_title"><?php echo strip_tags($row['title']);?></div>
                <div class="promotion_text">
                    <?php if ($row['field_promotion_summary'] != ''):?>
                        <div class="promotion_summary">
                            <?php echo $row['field_promotion_summary'];?>
                        </div>
                        <div class="promotion_read_more">READ MORE</div>
                        <div class="promotion_full" style="display:none;">
                            <?php echo $row['body'];?>
                        </div>
                    <?php else:?>
                        <?php echo $row['body'];?>
                    <?php endif;?>
                    
                </div>
            </div>
            <div class="clear"></div>
        </div>
    <?php endforeach;?>
    
</div>
<?php endif; ?>