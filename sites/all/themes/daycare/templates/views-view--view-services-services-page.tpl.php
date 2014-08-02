<?php
global $base_url;
$rows = $view->style_plugin->rendered_fields;
$servicesIntroduction = module_invoke('block', 'block_view', '16');
?>

<div id = "service_content">
    <div class = "col-xs-12 col-md-offset-1 col-md-10">
        <div id = "service_main_content" class = "col-xs-9">
        <?php echo $servicesIntroduction['content'];
        ?>
        <div id="service_star">
            <span id="service_star_inner">
                <img src="<?php echo $base_url; ?>/sites/all/themes/daycare/images/3_service/services_star.png" />
            </span>
        </div>
        <?php if (count($rows)) :?>
            <?php $count = 1;?>
            <div id="myTabContent" class="tab-content">
            <?php foreach ($rows as $row) : ?>
                <div class="tab-pane fade in" id="service_<?php echo $count;?>">
                    <div class="service_title">
                        <?php print_r(strip_tags($row['title'])); ?>
                    </div>

                    <div class="service_body">
                        <?php echo $row['body']; ?>
                    </div>
                </div>
                <?php $count++;?>
            <?php endforeach; ?>
                
              </div>
        <?php endif; ?>
        </div>
        <div id="service_right_sidebar" class="col-xs-3">
            <div id="service_yellow_div" class="box_shadow">
                Services
            </div>
            <div id="box_services">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <?php $count = 1;?>
                    <?php if (count($rows)) :?>
                        <?php foreach ($rows as $row) : ?>
                            <li class="list_services">
                                <a href="#service_<?php echo $count;?>" role="tab" data-toggle="tab" style="display:block; background:none; border:none;">
                                    <div class="service_icon">
                                        <div class="service_icon_thumbnail"><?php print_r($row['field_image_thumbnail']); ?></div>
                                        <div class="service_icon_hover"><?php print_r($row['field_image_hover_red']); ?></div>
                                    </div>
                                    <div class="service_detail"><?php print_r(strip_tags($row['title'])); ?></div>
                                </a>
                            </li>
                            <?php $count++;?>
                        <?php endforeach; ?>
                    <?php endif; ?>
              </ul>
            </div>
        </div>
    </div>
</div>

