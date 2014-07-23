<?php
/**
 * @file
 * daycare theme's implementation to display the basic html structure of a single
 * Drupal page.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
    "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
    <?php print $rdf_namespaces; ?>>

    <head profile="<?php print $grddl_profile; ?>">
        <?php $head = str_replace('favicon.ico', 'favicon.ico?v=2', $head); ?>
        <?php print_r($head); ?>
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <?php print $scripts; ?>
        <meta name="viewport" content="width=device-width">

        <!--[if IE 8]>
        <style type="text/css" media="all">@import "<?php global $base_path;
        print $base_path . path_to_theme() ?>/css/ie8.css";</style>
            <![endif]-->

        <?php
            global $base_url;
            $background_style = '';
            $bg_file = theme_get_setting('bg_file');
            $bg_path = $base_url . "/" . $bg_file;
            if ($bg_file) {
                $background_style .= 'filter:;background: url(' . $bg_path . ') repeat ';
            }
        ?>

        <body>
            <div id="skip">
                <a href="#main-menu"><?php print t('Jump to Navigation'); ?></a>
            </div>
            <?php print $page_top; ?>
            <?php print $page; ?>
<?php print $page_bottom; ?>
        </body>
        </html>