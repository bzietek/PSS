<?php
/* Smarty version 4.5.2, created on 2025-05-27 00:25:51
  from 'cms_template:a_part_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834ea6f488182_04940776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1748298349',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834ea6f488182_04940776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>

<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f0f8ff;
			color: #333;
			margin: 0;
			padding: 0;
		}
		#header {
			background-color: #007acc;
			color: white;
			padding: 1rem 2rem;
			text-align: center;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		}
		#header h1 {
			margin: 0;
			font-weight: 700;
			letter-spacing: 2px;
		}
		#menu {
			background-color: #004a99;
			display: flex;
			justify-content: center;
			padding: 0.5rem 0;
		}
		#menu a {
			color: white;
			text-decoration: none;
			padding: 0.75rem 1.5rem;
			font-weight: 600;
			transition: background-color 0.3s ease;
			border-radius: 4px;
			margin: 0 0.3rem;
		}
	
	</style>
</head>
<body>
	<header id="header">
		<h1><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
		<p>Twoje źródło inspiracji podróżniczych</p>
	</header>


<section id="content">
	<nav id="menu">
		<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

	</nav><?php }
}
