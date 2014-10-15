<!-----------------------------  Package Tour  -------------------------------->
<?php
    $packageLeft = module_invoke('block', 'block_view', '13');
    $packageRight = module_invoke('block', 'block_view', '14');
    $packageBanner = module_invoke('block', 'block_view', '20');
?>

<!--------------------------------------------------  Header  ------------------------------------------------------->
<div id="header" style="float:none;">
    <div id="service_left_header"  class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
        <?php echo $packageLeft['content']; ?>
    </div>
    <div id="service_right_header" class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
        <?php echo $packageRight['content']; ?>
    </div>
    <div style="clear: left;"></div>
</div>
<div id="service_banner">
    <div class="col-xs-12 col-md-offset-1 col-md-10">
        <?php echo $packageBanner['content']; ?>
    </div>
</div>

<!---------------------------------------------  Information  ------------------------------------------------------->
<div class="col-xs-12 col-sm-offset-1 col-sm-10">
    <?php print render($content['field_package_tour_avatar']);?>
    <div id="services_title" style="text-transform: uppercase">
        <?php print_r($node->title);?>
    </div>
    <div style="text-align:justify">
        <?php print_r($node->body['und'][0]['value']); ?>
    </div>
</div>