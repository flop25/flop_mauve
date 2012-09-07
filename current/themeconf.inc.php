<?php
/*
Theme Name: flop_mauve
Version: auto
Description: A mauve theme derived from the dark theme of piwigo
Theme URI: http://fr.piwigo.org/ext/extension_view.php?eid=62
Author: flop25
Author URI: http://www.planete-flop.fr
*/
$themeconf = array(
  'name' => 'flop_mauve',
  'parent'        => 'default',
  'icon_dir'      => 'themes/default/icon',
  'mime_icon_dir' => 'themes/default/icon/mimetypes/',
  'local_head'		=> 'local_head.tpl',
  );

$conf['level_separator'] = ' &raquo; ';
$conf['paginate_pages_around'] = 7;
$conf['show_picture_name_on_title'] = false;
$conf['show_thumbnail_caption'] = false;
/** mainpage_categories.tpl **/
add_event_handler('loc_end_index_category_thumbnails', 'flopmauve_cat');
function flopmauve_cat($tpl_thumbnails_var)
{
    global $template;
    $template->set_prefilter('index_category_thumbnails', 'flopmauve_cat_pre');
		return $tpl_thumbnails_var;
}
function flopmauve_cat_pre($content, &$smarty)
{
  $search = 'NAME}</a>';
  $replacement = 'NAME|truncate:38:" [...]"}</a>';
  $content=str_replace($search, $replacement, $content);
  $search = 'DESCRIPTION}</p>';
  $replacement = 'DESCRIPTION|truncate:130:" [...]"}</p>';
  return str_replace($search, $replacement, $content);
}

?>
