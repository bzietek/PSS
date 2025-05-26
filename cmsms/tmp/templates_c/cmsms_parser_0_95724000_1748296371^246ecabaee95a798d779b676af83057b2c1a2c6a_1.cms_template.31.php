<?php
/* Smarty version 4.5.2, created on 2025-05-26 23:52:51
  from 'cms_template:31' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834e2b3ea4352_40878023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246ecabaee95a798d779b676af83057b2c1a2c6a' => 
    array (
      0 => 'cms_template:31',
      1 => '1748296294',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834e2b3ea4352_40878023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),));
echo smarty_function_global_content(array('name'=>"a_part_top"),$_smarty_tpl);?>

<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
		<p>Twoje źródło inspiracji podróżniczych</p>
	</header>


	<section id="content">
	<nav id="menu">
		
	</nav>

<?php echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
