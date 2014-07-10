<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>

    <div id="amazingslider-1" style="display:block;position:relative;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php foreach ($rows as $row) :?>
                <li><?php print_r($row['field_slide_image']); ?></li>
            <?php endforeach;?>
        </ul>
    </div>

<?php endif; ?>