<?php
/**
 * @file
 * daycare theme's implementation to display a single Drupal page.
 */
global $base_url;
$header_style = '';
$header_bg_file = theme_get_setting('header_bg_file');
$header_path = $base_url . "/" . $header_bg_file;
if ($header_bg_file) {
    $header_style .= 'filter:;background: url(' . $header_path . ') repeat ';
    $header_style .= theme_get_setting('header_bg_alignment') . ';';
}
?>
<!-- Insert to your webpage before the </head> -->
    <script src="<?php echo $base_url;?>/sites/all/themes/daycare/slider_engine/sliderengine/amazingslider.js"></script>
    <script src="<?php echo $base_url;?>/sites/all/themes/daycare/slider_engine/sliderengine/initslider-1.js"></script>
<!-- End of head section HTML codes -->
    
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <header id="header" style="<?php //echo $header_style;  ?>">
        <div id="header_logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img style="float:left" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
        </div>

        <?php if ($main_menu || $secondary_menu): ?>
        <nav id="navigation" class="menu <?php
            if (!empty($main_menu)) {
                print "with-primary";
            }
            if (!empty($secondary_menu)) {
                print " with-secondary";
            }
            ?>">
            <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
            <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
        </nav>
    <?php endif; ?>
    </header>
    
    <div id="header2">
        <?php if ($page['header']): ?>
            <?php $blockSlogan = module_invoke('block', 'block_view', '5');?>
            <?php $blockInfo   = module_invoke('block', 'block_view', '6');?>
        
            <div id="header2_slogan"><?php echo $blockSlogan['content'];?></div>
            <div id="header2_info"><?php echo $blockInfo['content'];?></div>
        <?php endif; ?>
    </div>
    
    <!-------------------------  slide show  ---------------------------------->
    <div id="slide_show" style="clear: both ;width:100%;">
        <?php if ($page['slideshow']): ?>
            <?php print render($page['slideshow']); ?>
        <?php endif;?>
    </div>
    <!------------------------------------------------------------------------->
    
    
    <!-------------------------  brand image  --------------------------------->
    <?php if ($page['brand_image']): ?>
        <?php print render($page['brand_image']); ?>
    <?php endif;?>
    <!------------------------------------------------------------------------->
    
    
    <!--------------------------  testimonial  -------------------------------->
    <?php if ($page['testimonial']): ?>
        <?php print render($page['testimonial']); ?>
    <?php endif;?>
    <!------------------------------------------------------------------------->
    
    
    <!--------------------------  our service  -------------------------------->
    <?php if ($page['our_services']): ?>
        <?php print render($page['our_services']); ?>
    <?php endif;?>
    <!------------------------------------------------------------------------->
    
    
    <!--------------------------  content  ------------------------------------>
    <div id="main" class="clearfix">
        <?php if ($page['content'] && !$is_front): ?>
            <?php print render($page['content']); ?>
        <?php endif;?>
        <img src="<?php echo $base_url;?>/sites/all/themes/daycare/images/1_home/instruction.png" style="width:100%; height:auto;"/>
        <div class="clear"></div>
    </div>



    <!-- ______________________ FOOTER _______________________ -->

    <?php if ($page['footer']): ?>
        <footer id="footer">
            <nav id="footer_menu" class="<?php
                if (!empty($main_menu)) {
                    print "with-primary";
                }
                if (!empty($secondary_menu)) {
                    print " with-secondary";
                }
                ?>">
                <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
                <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
            </nav>
            <?php print render($page['footer']); ?>
        </footer> <!-- /footer -->
    <?php endif; ?>
    </div>

<script src="<?php echo $base_url;?>/sites/all/themes/daycare/js/script.js"></script>