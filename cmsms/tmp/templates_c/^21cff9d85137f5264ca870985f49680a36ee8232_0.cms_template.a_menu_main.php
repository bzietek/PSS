<?php
/* Smarty version 4.5.2, created on 2025-05-26 23:56:20
  from 'cms_template:a_menu_main' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834e384b70494_88313915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21cff9d85137f5264ca870985f49680a36ee8232' => 
    array (
      0 => 'cms_template:a_menu_main',
      1 => '1748296579',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834e384b70494_88313915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => '/var/www/html/cmsms/tmp/templates_c/^21cff9d85137f5264ca870985f49680a36ee8232_0.cms_template.a_menu_main.php',
    'uid' => '21cff9d85137f5264ca870985f49680a36ee8232',
    'call_name' => 'smarty_template_function_Nav_menu_2009670676834e384b5bb99_84725221',
  ),
));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value), true);?>

<?php }?>

<style>
  ul.main-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #004a99;
    display: flex;
    justify-content: center;
  }

  ul.main-menu > li {
    position: relative;
    margin: 0 0.3rem;
  }

  ul.main-menu a {
    display: block;
    padding: 0.75rem 1.5rem;
    color: white;
    text-decoration: none;
    font-weight: 600;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  ul.main-menu li.active > a,
  ul.main-menu a:hover {
    background-color: #003366;
  }

  ul.main-menu .has-children > ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #004a99;
    min-width: 180px;
    padding: 0.5rem 0;
    border-radius: 0 0 6px 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    z-index: 1000;
    flex-direction: column;
  }

  ul.main-menu .has-children:hover > ul {
    display: block;
  }

  ul.main-menu .has-children > ul > li {
    margin: 0;
  }

  ul.main-menu .has-children > ul > li > a {
    padding: 0.5rem 1.2rem;
    font-weight: 500;
  }

  ul.main-menu .has-children > ul > li > a:hover {
    background-color: #003366;
  }
</style><?php }
/* smarty_template_function_Nav_menu_2009670676834e384b5bb99_84725221 */
if (!function_exists('smarty_template_function_Nav_menu_2009670676834e384b5bb99_84725221')) {
function smarty_template_function_Nav_menu_2009670676834e384b5bb99_84725221(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/smarty/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<ul class="main-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->_assignInScope('has_children', ((isset($_smarty_tpl->tpl_vars['node']->value->children)) && smarty_modifier_count($_smarty_tpl->tpl_vars['node']->value->children) > 0));?><li class="<?php if ($_smarty_tpl->tpl_vars['node']->value->active) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>has-children<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if ($_smarty_tpl->tpl_vars['has_children']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children), true);
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
<?php
}}
/*/ smarty_template_function_Nav_menu_2009670676834e384b5bb99_84725221 */
}
