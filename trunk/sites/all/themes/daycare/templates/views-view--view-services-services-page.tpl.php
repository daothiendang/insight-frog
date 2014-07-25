<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div id="box_services">
    <div id="services_inner">
        <?php foreach ($rows as $row) :?>
            <div class="list_services">
                <div class="service_icon"><?php print_r($row['field_image_thumbnail']);?></div>
                <div class="service_icon_hover"><?php print_r($row['field_image_hover_red']);?></div>
                <div class="service_detail"><?php print_r(strip_tags($row['title'])); ?></div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif; ?>