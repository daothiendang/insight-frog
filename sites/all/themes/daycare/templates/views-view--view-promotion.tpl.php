<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>

<div class="col-xs-12 col-md-offset-1 col-md-10 promotion_button_div">
    <?php $count=1;?>
    <?php foreach ($rows as $row) :?>
        <div class="col-xs-4 promotion_button_item" >
            <div class="promotion_button box_shadow" id="promotion_button_<?php echo $count;?>">
                <a href="#promotion_title_<?php echo $count; ?>"><?php echo strip_tags($row['title']);?></a>
            </div>
        </div>
        <?php $count++;?>
    <?php endforeach;?>
</div>

<div class="promotion_content">
    <?php $count=1;?>
    <?php foreach ($rows as $row) :?>
        <a style="display:block; width: 100%;height: 20px;" id="promotion_title_<?php echo $count?>"></a>
        <div class="promotion_list">
            <div class="col-xs-12 col-sm-offset-0 col-sm-5 col-md-offset-1 col-md-4 promotion_img">
                <?php echo $row['field_promotion_image'];?>
                <div class="promotion_price">
                    <?php echo $row['field_price'];?>
                </div>
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
        <?php $count++;?>
    <?php endforeach;?>
    
</div>
<?php endif; ?>