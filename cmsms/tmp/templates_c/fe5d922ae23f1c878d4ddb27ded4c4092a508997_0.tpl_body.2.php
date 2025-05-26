<?php
/* Smarty version 4.5.2, created on 2025-05-26 22:51:30
  from 'tpl_body:2' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834d452a8b8a7_14080887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5d922ae23f1c878d4ddb27ded4c4092a508997' => 
    array (
      0 => 'tpl_body:2',
      1 => '1748288844',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834d452a8b8a7_14080887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>"a_part_top"),$_smarty_tpl);?>

<section id="content">
<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
</section>
<?php echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
