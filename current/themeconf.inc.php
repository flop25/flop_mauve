<?php
/*
Theme Name: flop_mauve
Version: 3.1.1
Description: A mauve theme derived from the dark theme of piwigo
Theme URI: http://fr.piwigo.org/ext/extension_view.php?eid=385
Author: flop25
Author URI: http://www.planete-flop.fr
*/
$themeconf = array(
  'name' => 'flop_mauve',
  'parent'        => 'default',
  'icon_dir'      => 'themes/default/icon',
  'mime_icon_dir' => 'themes/default/icon/mimetypes/',
  'local_head' => '<!--[if IE]><style>
#content div.thumbnailCategory span {
    display: inline-block;
    height: 100%;
}
</style><![endif]-->
');

$conf['level_separator'] = ' &raquo; ';
$conf['paginate_pages_around'] = 7;



?>
