<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
    <div id="testimonial_title">WHAT OUR CLIENTS SAY</div>
    <div id="testimonial_inner">
        <?php foreach ($rows as $row) :?>
            <div>
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="div_open_quote"></div>
                    <div class="testimonial_content">
                        <p><?php print_r($row['body']); ?></p>
                    </div>
                    <div class="div_close_quote"></div>
                    <p class="testimonial_client_name"><?php print_r($row['field_client_s_name']); ?></p>
                </div>
                <div style="clear:left;"></div>
            </div>
        <?php endforeach;?>
    </div>
<?php endif; ?>
