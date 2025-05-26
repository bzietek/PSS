<?php
/* Smarty version 4.5.2, created on 2025-05-27 00:25:51
  from 'tpl_body:31' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834ea6f478626_35662380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80842882a27ae59cf6219909d3b41240ec259d78' => 
    array (
      0 => 'tpl_body:31',
      1 => '1748298334',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834ea6f478626_35662380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
echo smarty_function_global_content(array('name'=>"a_part_top"),$_smarty_tpl);?>



	
<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl);
echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
