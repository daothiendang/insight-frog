<!--  Service Page  -->
<?php
    global $base_url;
    $serviceLeft = module_invoke('block', 'block_view', '13');
    $serviceRight = module_invoke('block', 'block_view', '14');
    $bannerImage = module_invoke('block', 'block_view', '15');
?>

<div id="header">
    <div id="service_left_header"  class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
        <?php echo $serviceLeft['content']; ?>
    </div>
    <div id="service_right_header" class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
        <?php echo $serviceRight['content']; ?>
    </div>
    <div style="clear: left;"></div>
</div>

<div id="service_banner">
    <div class="col-xs-12 col-md-offset-1 col-md-10">
        <?php echo $bannerImage['content']; ?>
    </div>
</div>
