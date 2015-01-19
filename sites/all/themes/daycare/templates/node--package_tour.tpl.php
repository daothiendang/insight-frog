<!-----------------------------  Contact Us  ---------------------------------->
<?php
    global $base_path;
?>
<div style="float:left; margin:0; width:100%;">
    <ul class="contact_us_header">
        <li id="header_send_email" class="col-xs-4">
            <div class="contact_us_box">
                <a href="<?php echo $base_path;?>package_tours#flight" class="contact_header_item box_shadow_big">
                    INTERNAT'L FLIGHTS
                </a>
            </div>
        </li>
        <li id="header_reserve"    class="col-xs-4">
            <div class="contact_us_box">
                <a href="<?php echo $base_path;?>package_tours#list_tours" class="contact_header_item box_shadow_big">
                    PACKAGE TOURS
                </a>
            </div>
        </li>
        <li id="header_customize"  class="col-xs-4">
            <div class="contact_us_box">
                <a href="<?php echo $base_path;?>package_tours#visa_services" class="contact_header_item box_shadow_big">
                    VISA SERVICES
                </a>
            </div>
        </li>
        <li style="clear:left;"></li>
    </ul>
    <div class="dash_line" style="margin-top:-50px;"></div>
</div>

<?php
    $price = check_plain($node->field_package_tour_price[$node->language][0]['value']);
    $save = check_plain($node->field_save[$node->language][0]['value']);
?>

<div id="contact_container" style="max-width:900px; padding:0 25px;">
    <div style="margin:20px auto; font-size:28px;">
        <?php print_r($node->body['und'][0]['value']); ?>
    </div>
    <div style="color:#7F7F7F;">
        <?php print render($content['field_short_description']);?>
    </div>
    <div class="package_tour_tag">
        <?php print render($content['field_package_tour_tags']);?>
    </div>
    <div class="package_tour_big_img">
        <?php print render($content['field_package_tour_avatar']);?>
    </div>
    <div class="package_tour_small_img">
        <?php print render($content['field_other_related_images']);?>
    </div>
    <div class="promotion_price" style="float:left; margin-bottom:20px; text-align:left;">
        BEST OFFER: <?php echo $price;?>
        <?php if ($save != ''):?>
             - (Save <?php echo $save;?>)
        <?php endif;?>
    </div>
    <div class="package_tour_content clear">
        <?php print render($content['field_package_tour_itinerary']);?>
    </div>
    <div style="margin: 30px 0; width:100%; border:1px dashed #ccc"></div>
    <div style="max-width: 700px">
        <div class="fb-comments" style="max-width:600px" data-width="100%" 
             data-href="<?php echo $_SERVER['HTTP_HOST'] . request_uri();?>" data-numposts="10" data-colorscheme="light">
        </div>
    </div>
    <div style="max-width: 700px">
        <div class="g-comments"
            data-href="https://www.google.com"
            data-width="500"
            data-first_party_property="BLOGGER"
            data-view_type="FILTERED_POSTMOD">
        </div>
    </div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/plusone.js">
</script>

