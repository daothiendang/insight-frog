<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
    <div id="box_testimonial">
        <div id="testimonial_title">WHAT OUR CLIENTS SAY</div>
        <div id="testimonial_inner">
            <?php foreach ($rows as $row) :?>
                <div class="testimonial">
                    <img class="testimonial_open_quote" src="<?php echo $base_url;?>/sites/all/themes/daycare/images/opening_quotation.png" />
                    <p class="testimonial_content">
                        <?php print_r($row['body']); ?>
                    </p>
                    <img class="testimonial_close_quote" src="<?php echo $base_url;?>/sites/all/themes/daycare/images/closing_quotation.png" />
                    <p class="testimonial_client_name">
                        <?php print_r($row['field_client_s_name']); ?>
                    </p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
<?php endif; ?>
