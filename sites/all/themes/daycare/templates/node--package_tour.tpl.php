<!-----------------------------  Contact Us  ---------------------------------->
<?php
    $price = check_plain($node->field_package_tour_price[$node->language][0]['value']);
    $save = check_plain($node->field_save[$node->language][0]['value']);
?>

<?php $serviceLeft  = module_invoke('block', 'block_view', '13'); ?>
            <?php $serviceRight = module_invoke('block', 'block_view', '14'); ?>

<div id="header">
    <div id="service_left_header"  class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
        <?php echo $serviceLeft['content']; ?>
    </div>
    <div id="service_right_header" class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
        <?php echo $serviceRight['content']; ?>
    </div>
</div>
<div class="clear"></div>
<div class="dash_line" style="clear:both; margin:10px auto 10px auto;"></div>

<div id="contact_container" style="max-width:900px; padding:0 25px;">
    <div style="margin:0 auto 10px auto; text-align:center; font-size:28px;">
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
    <div style="margin:0 auto; max-width: 700px">
        <div class="fb-comments" style="max-width:600px" data-width="100%" 
             data-href="<?php echo $_SERVER['HTTP_HOST'] . request_uri();?>" data-numposts="10" data-colorscheme="light">
        </div>
    </div>
    <div style="margin:0 auto; width:100%; max-width:700px;">
        <div class="g-comments"
            data-href="http://<?php echo $_SERVER['HTTP_HOST'] . request_uri();?>"
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

<script>
    plusWidth = $('.g-comments').parent().width();
    $('.g-comments').attr('data-width', plusWidth);
</script>
<script src="https://apis.google.com/js/plusone.js">
</script>
<script>
    $('#widget_bounds').css('min-height', '0');
</script>
