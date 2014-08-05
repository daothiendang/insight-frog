<!-----------------------------  Contact Us  ---------------------------------->
<?php
    global $base_url;
    $promotionLeft  = module_invoke('block', 'block_view', '17');
    $promotionRight = module_invoke('block', 'block_view', '18');
    $bannerImage    = module_invoke('block', 'block_view', '19');
?>

<div id="header">
    <div id="service_left_header"  class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
        <?php echo $promotionLeft['content']; ?>
    </div>
    <div id="service_right_header" class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
        <?php echo $promotionRight['content']; ?>
    </div>
</div>

<div id="service_banner">
    <div class="col-xs-12 col-md-offset-1 col-md-10">
        <?php echo $bannerImage['content']; ?>
    </div>
</div>

<div id="promotion_content">
    <div id="promotion_yellow_div" class="box_shadow">Promotion</div>
</div>
