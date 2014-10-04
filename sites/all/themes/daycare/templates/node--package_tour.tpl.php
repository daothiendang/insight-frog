<!-----------------------------  Contact Us  ---------------------------------->
<?php
?>

<div id="package_container">
    <?php print render($content['field_package_tour_avatar']);?>
    <div style="margin:20px auto; text-align:center; font-size:28px; font-weight:bold; color:#0B6D34;">
        <?php print_r($node->title);?>
    </div>
    <div style="padding:0px 25px;">
        <?php print_r($node->body['und'][0]['value']); ?>
    </div>
</div>