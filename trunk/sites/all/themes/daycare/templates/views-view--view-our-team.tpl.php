<?php 
global $base_url;
$rows=$view->style_plugin->rendered_fields;
if (count($rows)) :
    $title = $view->display[$view->current_display]->display_title;
?>
<div id="box_member">
    <div class="about_title" style="text-align: center;"><?php echo $title;?></div>
    <div id="member_inner">
        <?php foreach ($rows as $row) :?>
            <div class="col-sm-4 col-xs-6 member">
                <div class="member_avatar"><?php print_r($row['field_member_avatar']);?></div>
                <div class="member_name"><?php print_r($row['field_member_name']);?></div>
                <div class="member_position"><?php print_r($row['field_member_position']); ?></div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif; ?>