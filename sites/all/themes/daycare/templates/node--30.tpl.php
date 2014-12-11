<!-----------------------------  Contact Us  ---------------------------------->
<?php
$packageLeft = module_invoke('block', 'block_view', '13');
$packageRight = module_invoke('block', 'block_view', '14');

$block1 = block_load('webform', 'client-block-30');
$sendEmail = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block1))));

// get contact information
$phone = check_plain($node->field_phone[$node->language][0]['value']);
$phone2 = check_plain($node->field_phone_2[$node->language][0]['value']);
$email = check_plain($node->field_email[$node->language][0]['value']);
$skype = check_plain($node->field_skype[$node->language][0]['value']);
$website = check_plain($node->field_website[$node->language][0]['value']);
$location = check_plain($node->field_location[$node->language][0]['value']);
$gmap = $node->field_link_gmap[$node->language][0]['value'];
?>

<div id="header" style="float:none;">
    <div id="service_left_header"  class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
        <?php echo $packageLeft['content']; ?>
    </div>
    <div id="service_right_header" class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
        <?php echo $packageRight['content']; ?>
    </div>
    <div style="clear: left;"></div>
</div>

<div id="contact_container">
    <div class="tab-pane fade in active" id="contact_send_mail">
        <div class="col-xs-12" id="gmap">
            <?php echo $gmap; ?>
        </div>
        <div class="col-xs-12 col-md-7 form_send_mail">
            <div class="contact_title" style="color:#ef6951;">SEND US AN EMAIL</div>
            <?php print $sendEmail; ?>
        </div>
        <div class="col-xs-12 col-md-5 contact_info">
            <div id="info_title">THE INSIGHT FROG</div>
            <div class="info_row">
                <div class="info_label">*Phone:</div>
                <div class="info_value">
                    <?php echo $phone; ?><br>
                    <?php echo $phone2; ?>

                </div>
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
    </div>
    
    <div id="box_social_link">
        <div class="col-xs-12">
            <div class="fb-like-box" data-href="https://www.facebook.com/theinsightfrog" data-width="300" data-height="400" data-colorscheme="dark" data-show-faces="true" data-header="true" data-show-border="true"></div>
            <div style="float:left;">
                <a data-pin-do="embedUser" href="http://www.pinterest.com/insightfrog/" data-pin-scale-width="100" data-pin-scale-height="300" data-pin-board-width="400">
                    Visit the Insight Frog's profile on Pinterest.
                </a>
            </div>
            <div class="g-page" data-href="//plus.google.com/u/0/105036878866977951618" data-width="320" data-rel="publisher"></div>
        </div>
<!--        <div class="col-xs-12 col-sm-6">
            
        </div>-->
    </div>    
</div>


<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        //$('.fb-like-box').css('background', 'red');
    }(document, 'script', 'facebook-jssdk'));
</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>