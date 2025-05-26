<?php
/* Smarty version 4.5.2, created on 2025-05-27 00:36:18
  from 'cms_template:2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834ece23cf6f1_67881209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19f397ba24272585af898c0ad4a919f23f310ef' => 
    array (
      0 => 'cms_template:2',
      1 => '1748288844',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834ece23cf6f1_67881209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>"a_part_top"),$_smarty_tpl);?>

<section id="content">
<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>

</section>
<?php echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
