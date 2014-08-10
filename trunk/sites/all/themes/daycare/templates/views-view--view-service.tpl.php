<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div id="box_services">
    <div id="services_title">OUR SERVICES</div>
    <div id="services_inner">
        <?php foreach ($rows as $row) :?>
            <div>
                <div class="col-sm-4 col-xs-6 services_content">
                    <a class="service_polygon" href="<?php echo $base_url . '/services/#' . $row['field_display_position'];?>">
                        <div class="service_icon"><?php echo $row['field_image_thumbnail'];?></div>
                        <div class="service_icon_hover"><?php echo $row['field_image_hover'];?></div>
                    </a>
                    <div class="service_detail"><?php echo strip_tags($row['title']); ?></div>
                </div>
            </div>
        <?php endforeach;?>
        <div style="float:left; width:100%; text-align: center;">
            <a href="contact-us" id="tell_request" class="box_shadow">Tell us your special request</a>
        </div>
    </div>
</div>
<?php endif; ?>