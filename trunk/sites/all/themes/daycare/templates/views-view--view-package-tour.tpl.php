<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div class="col-xs-12 col-sm-offset-1 col-sm-10" style="margin-top:40px;">
    <?php foreach ($rows as $row) :?>
        <div class="package_tour">
            <div class="package_avatar col-xs-5 col-sm-3">
                <?php print_r($row['field_package_tour_avatar']);?>
                <div style="padding:5px 0; text-align:center; font-size:15px;">
                    <?php print_r($row['field_package_tour_price']);?>
                </div>
            </div>
            <div class="package_content col-xs-7 col-sm-9">
                <div style="margin-bottom:15px;">
                    <?php print_r($row['body']);?>
                </div>
                <div style="text-align:justify;">
                    <?php print_r($row['field_short_description']);?><br><br>
                </div>
                <div>
                    <?php 
                        preg_match('/href=(["\'])([^\1]*)\1/i', $row['field_pdf_file'], $m);
                    ?>
                    Download the itinerary <a target="_blank" href="<?php echo $m[2];?>">here</a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php endif; ?>