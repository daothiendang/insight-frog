<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
    $packageBannerNorth  = module_invoke('block', 'block_view', '20');
    $packageBannerCenter = module_invoke('block', 'block_view', '23');
    $packageBannerSouth  = module_invoke('block', 'block_view', '25');
?>
<!----------------------  tour in the north  ---------------------------------->
<div class="col-xs-12 mobile_full_width">
    <div class="package_tour_intro box_shadow_big">
        <div class="tour_description tour_description_north">
            <?php $blockTourNorth = module_invoke('block', 'block_view', '21');?>
            <?php echo $blockTourNorth['content'];?>
        </div>
        <?php echo $packageBannerNorth['content']; ?>
    </div>
    <div class="package_tour_list">
        <?php foreach ($rows as $row) :
            $s = explode('href="', $row['title']);
            $link = explode('">', $s[1]);
        ?>
            <?php if ($row['field_package_tour_region'] == 'North'):?>
                <div class="package_tour">
                    <div class="package_avatar col-xs-12 col-sm-3 col-md-5">
                        <a href ="<?php echo $link[0];?>">
                            <?php print_r($row['field_package_tour_avatar']);?>
                        </a>
                    </div>
                    <div class="package_content col-xs-12 col-sm-9 col-md-7">
                        <div class="promotion_title">
                            <a href ="<?php echo $link[0];?>">
                                <?php print_r($row['body']);?>
                            </a>
                        </div>
                        <div style="text-align:justify;">
                            <?php print_r($row['field_short_description']);?><br><br>
                        </div>
                        <?php
                        /*<div class="package_tour_download">
                            <?php preg_match('/href=(["\'])([^\1]*)\1/i', $row['field_pdf_file'], $m);?>
                            <a target="_blank" href="//<?php echo $m[2];?>" style="color:#89A33C">DOWNLOAD THE ITINERARY HERE</a>
                        </div>*/
                        ?>
                        <div class="promotion_price" style="margin-top:-10px;">
                            <?php print_r($row['field_package_tour_price']);?>
                            <?php if ($row['field_save']!= ''):?>
                                 - (Save <?php print_r($row['field_save']);?>)
                            <?php endif;?>
                        </div>
                        <div class="package_tour_tag">
                            <?php print_r(str_replace(',', '', $row['field_package_tour_tags']));?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</div>
<!----------------------------------------------------------------------------->
<!----------------------  tour in the central  -------------------------------->
<div class="col-xs-12 mobile_full_width">
    <div class="package_tour_intro box_shadow_big">
        <div class="tour_description tour_description_center">
            <?php $blockTourCentral = module_invoke('block', 'block_view', '22');?>
            <?php echo $blockTourCentral['content'];?>
        </div>
        <?php echo $packageBannerCenter['content']; ?>
    </div>
    <div class="package_tour_list">
        <?php foreach ($rows as $row) :
            $s = explode('href="', $row['title']);
            $link = explode('">', $s[1]);
        ?>
            <?php if ($row['field_package_tour_region'] == 'Central'):?>
                <div class="package_tour">
                    <div class="package_avatar col-xs-12 col-sm-3 col-md-5">
                        <a href ="<?php echo $link[0];?>">
                            <?php print_r($row['field_package_tour_avatar']);?>
                        </a>
                    </div>
                    <div class="package_content col-xs-12 col-sm-9 col-md-7">
                        <div class="promotion_title">
                            <a href ="<?php echo $link[0];?>">
                                <?php print_r($row['body']);?>
                            </a>
                        </div>
                        <div style="text-align:justify;">
                            <?php print_r($row['field_short_description']);?><br><br>
                        </div>
                        <?php
                        /*<div class="package_tour_download">
                            <?php preg_match('/href=(["\'])([^\1]*)\1/i', $row['field_pdf_file'], $m);?>
                            <a target="_blank" href="<?php echo $m[2];?>" style="color:#89A33C">DOWNLOAD THE ITINERARY HERE</a>
                        </div>*/
                        ?>
                        <div class="promotion_price" style="margin-top:-10px;">
                            <?php print_r($row['field_package_tour_price']);?>
                            <?php if ($row['field_save']!= ''):?>
                                 - (Save <?php print_r($row['field_save']);?>)
                            <?php endif;?>
                        </div>
                        <div class="package_tour_tag">
                            <?php print_r(str_replace(',', '', $row['field_package_tour_tags']));?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</div>
<!----------------------------------------------------------------------------->

<!----------------------  tour in the south  -------------------------------->
<div class="col-xs-12 mobile_full_width" style="margin-bottom: 50px;">
    <div class="package_tour_intro box_shadow_big">
        <div class="tour_description tour_description_south">
            <?php $blockTourSouth = module_invoke('block', 'block_view', '24');?>
            <?php echo $blockTourSouth['content'];?>
        </div>
        <?php echo $packageBannerSouth['content']; ?>
    </div>
    <div class="package_tour_list">
        <?php foreach ($rows as $row) :
            $s = explode('href="', $row['title']);
            $link = explode('">', $s[1]);
        ?>
            <?php if ($row['field_package_tour_region'] == 'South'):?>
                <div class="package_tour">
                    <div class="package_avatar col-xs-12 col-sm-3 col-md-5">
                        <a href ="<?php echo $link[0];?>">
                            <?php print_r($row['field_package_tour_avatar']);?>
                        </a>
                    </div>
                    <div class="package_content col-xs-12 col-sm-9 col-md-7">
                        <div class="promotion_title">
                            <a href ="<?php echo $link[0];?>">
                                <?php print_r($row['body']);?>
                            </a>
                        </div>
                        <div style="text-align:justify;">
                            <?php print_r($row['field_short_description']);?><br><br>
                        </div>
                        <?php
                        /*<div class="package_tour_download">
                            <?php preg_match('/href=(["\'])([^\1]*)\1/i', $row['field_pdf_file'], $m);?>
                            <a target="_blank" href="<?php echo $m[2];?>" style="color:#89A33C">DOWNLOAD THE ITINERARY HERE</a>
                        </div>*/
                        ?>
                        <div class="promotion_price" style="margin-top:-10px;">
                            <?php print_r($row['field_package_tour_price']);?>
                            <?php if ($row['field_save']!= ''):?>
                                 - (Save <?php print_r($row['field_save']);?>)
                            <?php endif;?>
                        </div>
                        <div class="package_tour_tag">
                            <?php print_r(str_replace(',', '', $row['field_package_tour_tags']));?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach;?>
    </div>
</div>
<!----------------------------------------------------------------------------->
<?php endif; ?>