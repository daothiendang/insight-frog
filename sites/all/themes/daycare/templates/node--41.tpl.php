<!-----------------------------  Booking  -------------------------------->
<?php


$packageBannerCenter = module_invoke('block', 'block_view', '23');
?>



<div id="contact_container">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="contact_send_mail">
            <div class="col-xs-12" style="text-align: center;">
                <span class="contact_title" style="color:#2ecc71;">FLIGHT TICKET</span><br><br><br>
                This function is currently under development
            </div>
        </div>
        <div class="tab-pane fade in active" id="contact_reserve">
            <!---------------------------------------------  Information  ------------------------------------------------------->
            <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                <?php print render($content['field_package_tour_avatar']); ?>
                <div id="services_title" style="text-transform: uppercase">
                    <?php print_r($node->title); ?>
                </div>
                <div style="text-align:justify">
                    <?php print_r($node->body['und'][0]['value']); ?>
                </div>
            </div>
            <?php
            $block1 = \block_load('views', 'view_package_tour-block');
            $output1 = \drupal_render(_block_get_renderable_array(_block_render_blocks(array($block1))));
            print $output1;
            ?>
        </div>
        <div class="tab-pane fade in" id="contact_customize">
            <div class="col-xs-12" style="text-align: center;">
                <span class="contact_title" style="color:#3498db;">VISA</span><br><br><br>
                This function is currently under development
            </div>
        </div>
    </div>
</div>


<!--------------------------------------------------  Header  ------------------------------------------------------->
