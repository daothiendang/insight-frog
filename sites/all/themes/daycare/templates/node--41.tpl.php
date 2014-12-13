<!-----------------------------  Booking  -------------------------------->
<div id="contact_container">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="contact_send_mail">
            <div class="col-xs-12" style="text-align: center;">
                <span class="contact_title" style="color:#2ecc71;">INTERNATIONAL FLIGHT TICKET</span><br><br><br>
                This function is currently under development
            </div>
        </div>
        <div class="tab-pane fade in active" id="contact_reserve">
            <div class="col-xs-12" style="text-align: center;">
                <span class="contact_title" style="color:#F0735B;"><?php print_r($node->title); ?></span><br><br>
            </div>
            <?php
            $block1 = \block_load('views', 'view_package_tour-block');
            $output1 = \drupal_render(_block_get_renderable_array(_block_render_blocks(array($block1))));
            print $output1;
            ?>
        </div>
        <div class="tab-pane fade in" id="contact_customize">
            <div class="col-xs-12" style="text-align: center;">
                <span class="contact_title" style="color:#3498db;">VISA SERVICES</span><br><br><br>
                This function is currently under development
            </div>
        </div>
    </div>
</div>
