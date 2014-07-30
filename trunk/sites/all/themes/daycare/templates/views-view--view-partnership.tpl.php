<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div id="box_partnership">
    <div style="float:left; width:100%; text-align: center;">
        <a id="become_partner" href="#">BECOME OUR PARTNER</a>
    </div>
    <div id="partner_inner">
        <?php foreach ($rows as $row) :?>
                <div class="col-sm-4 col-xs-6">
                    <a title="<?php print_r(strip_tags($row['title'])); ?>" href="<?php echo strip_tags($row['field_partner_link']);?>" class="partner" target="_blank">
                        <?php print_r($row['field_partner_image']);?>
                    </a>
                </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif; ?>