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
            <div>
                <div class="col-lg-3 col-md-3 col-sm-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="div_open_quote"></div>
                    <div class="testimonial_content">
                        <p><?php print_r($row['body']); ?></p>
                    </div>
                    <div class="div_close_quote"></div>
                    <p class="testimonial_client_name"><?php print_r($row['field_client_s_name']); ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2"></div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif; ?>
