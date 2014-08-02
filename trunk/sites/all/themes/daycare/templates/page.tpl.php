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
    <div id="home-content">
        <header id="header" style="<?php //echo $header_style;  ?>">
            <div id="header_logo" class="col-sm-12 col-md-1 col-md-offset-1 col-lg-offset-1 col-lg-2">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img style="float:left" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                </a>
            </div>

            <?php if ($main_menu || $secondary_menu): ?>
            <nav id="navigation" class="col-sm-12 col-md-10 col-lg-offset-1 col-lg-7 menu <?php
                if (!empty($main_menu)) {
                    print "with-primary";
                }
                if (!empty($secondary_menu)) {
                    print " with-secondary";
                }
                ?>">
                <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => array('menu_primary', 'links', 'clearfix', 'main-menu')))); ?>
                <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary', 'links', 'clearfix', 'sub-menu')))); ?>
            </nav>
        <?php endif; ?>
        </header>

        <!---------------  header2 of home page  ------------------------------>
        <?php if ($is_front): ?>
            <div id="header2">
                <?php $blockSlogan = module_invoke('block', 'block_view', '5');?>
                <?php $blockInfo   = module_invoke('block', 'block_view', '6');?>

                <div id="header2_slogan" class="col-xs-offset-0 col-xs-12 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-1">
                    <?php echo $blockSlogan['content'];?>
                </div>
                <div id="header2_info"   class="col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-1">
                    <?php echo $blockInfo['content'];?>
                </div>
            </div>
        <?php endif; ?>
        <!--------------------------------------------------------------------->
                    
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
            <div id="box_testimonial">
                <?php print render($page['testimonial']); ?>
                <div id="btn_promotion">
                    PROMOTION
                </div>
            </div>
        <?php endif;?>
        <!------------------------------------------------------------------------->


        <!--------------------------  our service  -------------------------------->
        <?php if ($page['our_services']): ?>
            <?php print render($page['our_services']); ?>
        <?php endif;?>
        <!------------------------------------------------------------------------->
    </div>
    
    
    <!-------------- header for page about us  ---------------------------->
    <?php if ($page['header']): ?>
        <?php if (arg(0) == 'node' && is_numeric(arg(1))): ?>
            <?php $nodeid = arg(1);?>
            <?php if ($nodeid == 1):?>
                <div id="about_us_header">
                    <div id="about_us_header_content">
                        <?php $blockIntro  = module_invoke('block', 'block_view', '10');?>
                        <?php $blockVision = module_invoke('block', 'block_view', '11');?>

                        <div id="about_us_slogan" class="col-xs-12 col-sm-6">
                            <div class="col-xs-offset-0 col-md-offset-2 col-md-10 about_us_header_col">
                                <div class="about_title">INTRODUCTION</div>
                                <div class="about_header_text">
                                    <div class="about_summarize">
                                        <?php echo strstr(wordwrap($blockIntro['content'], 240), "\n", true);?>
                                    </div>
                                    <div class="about_full">
                                        <?php echo $blockIntro['content'];?>
                                    </div>
                                </div>
                                <div class="about_read_more">
                                    READ MORE
                                </div>
                            </div>
                        </div>
                        <div id="header2_info"   class="col-xs-12 col-sm-6">
                            <div class="col-xs-12 col-md-10 about_us_header_col">
                                <div class="about_title">OUR VISION</div>
                                <div class="about_header_text">
                                    <div class="about_summarize">
                                        <?php echo strstr(wordwrap($blockVision['content'], 240), "\n", true);?>
                                    </div>
                                    <div class="about_full">
                                        <?php echo $blockVision['content'];?>
                                    </div>
                                </div>
                                <div class="about_read_more">
                                    READ MORE
                                </div>
                            </div>
                        </div>
                        <div style="clear:left"></div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif;?>
    <?php endif; ?>
    <!------------------------------------------------------------------------->
    
    <!-------------- header for page contact us  ---------------------------->
    <?php if (arg(0) == 'node' && is_numeric(arg(1))): ?>
        <?php $nodeid = arg(1);?>
        <?php if ($nodeid == 30):?>
            <div id="about_us_header">
                <div id="contact_us_header">
                    <div id="header_send_email" class="col-xs-4">
                        <div class="contact_header_item box_shadow_big">SEND US AN EMAIL</div>
                    </div>
                    <div id="header_reserve"    class="col-xs-4">
                        <div class="contact_header_item box_shadow_big">RESERVE A MEET UP</div>
                    </div>
                    <div id="header_customize"  class="col-xs-4">
                        <div class="contact_header_item box_shadow_big">CUSTOMIZE YOUR REQUEST</div>
                    </div>
                    <div style="clear:left;"></div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif;?>
    <!------------------------------------------------------------------------->
    
    <!--------------------------  content  ------------------------------------>
    <div id="main" class="clearfix">
        <?php if ($page['content'] && !$is_front): ?>
            <?php print render($page['content']); ?>
        <?php else: ?>
            <img src="<?php echo $base_url;?>/sites/all/themes/daycare/images/1_home/instruction.png" style="width:100%; height:auto;"/>
        <?php endif;?>
        
        <div class="clear"></div>
    </div>



    <!-- ______________________ FOOTER _______________________ -->

    <?php if ($page['footer']): ?>
        <footer id="footer">
            <div id="footer_inner">
                <div id="footer_left">
                    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => array('menu_primary', 'links', 'clearfix', 'main-menu')))); ?>
                    <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary', 'links', 'clearfix', 'sub-menu')))); ?>
                </div>
                <div id="footer_right">
                    <div id="site_info">
                        <?php $siteInfo = module_invoke('block', 'block_view', '8');?>
                        <?php echo $siteInfo['content'];?>
                    </div>
                    <div id="social_icon">
                        <?php $socialIncon =  module_invoke('block', 'block_view', '9');?>
                        <?php echo preg_replace('/<p[^>]*>(.*)<\/p[^>]*>/i', '$1', $socialIncon['content']);?>
                    </div>
                </div>
                <div style="clear:left;"></div>
            </div>
        </footer>
    <?php endif; ?>
    </div>

<script src="<?php echo $base_url;?>/sites/all/themes/daycare/js/script.js"></script>