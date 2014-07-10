<?php 
$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
//$content = str_replace('<p>&nbsp;</p>', '<br/>', $content);
//$content = str_replace('<p>', '', $content);
//$content = str_replace('</p>', '', $content);
print $content; 
?>