<?php
global $base_url;
$rows = $view->style_plugin->rendered_fields;
$servicesIntroduction = module_invoke('block', 'block_view', '16');
?>

<div id = "service_content">
    <div class = "col-xs-12 col-md-offset-1 col-md-10">
        <div id="service_right_sidebar" class="col-xs-2 col-sm-1 col-md-3">
            <div id="service_yellow_div" class="box_shadow">
                Services
            </div>
            <div id="box_services">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <?php $count = 1;?>
                    <?php if (count($rows)) :?>
                        <?php foreach ($rows as $row) : ?>
                            <li class="list_services">
                                <a href="#<?php echo $row['field_display_position']; ?>" role="tab" data-toggle="tab" style="width:100%;display:inline-block; background:none; border:none;">
                                    <div class="service_icon">
                                        <div class="service_icon_thumbnail"><?php echo $row['field_image_thumbnail']; ?></div>
                                        <div class="service_icon_hover"><?php echo $row['field_image_hover_red']; ?></div>
                                    </div>
                                    <div class="service_detail"><?php print_r(strip_tags($row['title'])); ?></div>
                                </a>
                            </li>
                            <?php $count++;?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <a href="<?php echo $base_url;?>/promotion">
                <div id="service_promotion_div" class="box_shadow">
                    PROMOTION
                </div>
            </a>
        </div>
        <div id = "service_main_content" class = "col-xs-10 col-sm-11 col-md-9">
            <?php echo $servicesIntroduction['content'];
            ?>
            <div id="service_star">
                <span id="service_star_inner">
                    <img src="<?php echo $base_url; ?>/sites/all/themes/daycare/images/3_service/services_star.png" />
                </span>
            </div>
            <?php if (count($rows)) :?>
                <div id="myTabContent" class="tab-content">
                    <?php foreach ($rows as $row) : ?>
                        <div class="tab-pane fade in" id="<?php echo $row['field_display_position']; ?>">
                            <div class="service_title">
                                <?php print_r(strip_tags($row['title'])); ?>
                            </div>

                            <div class="service_body">
                                <?php echo $row['body']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

