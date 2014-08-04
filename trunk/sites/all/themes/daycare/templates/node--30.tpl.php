<?php
    $block1 = block_load('webform', 'client-block-30');
    $sendEmail = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block1))));
    
    $phone    = check_plain($node->field_phone[$node->language][0]['value']);
    $email    = check_plain($node->field_email[$node->language][0]['value']);
    $skype    = check_plain($node->field_skype[$node->language][0]['value']);
    $website  = check_plain($node->field_website[$node->language][0]['value']);
    $location = check_plain($node->field_location[$node->language][0]['value']);
    $gmap     = $node->field_link_gmap[$node->language][0]['value'];
?>

<div id="contact_container">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="contact_send_mail">
            <div class="col-xs-12 col-md-7 form_send_mail">
                <div class="contact_title" style="color:#ef6951;">SEND US AN EMAIL</div>
                <?php print $sendEmail;?>
            </div>
            <div class="col-xs-12 col-md-5 contact_info">
                <div id="info_title">THE INSIGHT FROG</div>
                <div class="info_row">
                    <div class="info_label">*Phone:</div>
                    <div class="info_value"><?php echo $phone; ?></div>
                </div>
                <div class="info_row">
                    <div class="info_label">*Email:</div>
                    <div class="info_value">
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                </div>
                <div class="info_row">
                    <div class="info_label">*Skype:</div>
                    <div class="info_value">
                        <a href="skype:<?php echo $skype; ?>?chat"><?php echo $skype; ?></a>
                    </div>
                </div>
                <div class="info_row">
                    <div class="info_label">*Website:</div>
                    <div class="info_value"><?php echo $website; ?></div>
                </div>
                <div class="info_row">
                    <div class="info_label">*Location:</div>
                    <div class="info_value"><?php echo $location; ?></div>
                </div>
            </div>
            <div class="col-xs-12" id="gmap">
                <?php echo $gmap;?>
            </div>
        </div>
        <div class="tab-pane fade in" id="contact_reserve">
            <span class="contact_title" style="color:#2ecc71;">RESERVE A MEETUP</span><br>
            This function is under construction
        </div>
        <div class="tab-pane fade in" id="contact_customize">
            <span class="contact_title" style="color:#3498db;">SEND US AN EMAIL</span><br>
            This function is under construction
        </div>
    </div>
</div>