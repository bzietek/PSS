<?php
/* Smarty version 4.5.2, created on 2025-05-26 23:23:26
  from 'cms_template:Breadcrumbs' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834dbce0017a6_49677571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c7570b5104d51c91b55f34321a8460292f9fa68' => 
    array (
      0 => 'cms_template:Breadcrumbs',
      1 => '1748278056',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834dbce0017a6_49677571 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb"><?php if ((isset($_smarty_tpl->tpl_vars['starttext']->value))) {
echo $_smarty_tpl->tpl_vars['starttext']->value;?>
:&nbsp;<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodelist']->value, 'node', true);
$_smarty_tpl->tpl_vars['node']->iteration = 0;
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->tpl_vars['node']->iteration++;
$_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
$__foreach_node_3_saved = $_smarty_tpl->tpl_vars['node'];
$_smarty_tpl->_assignInScope('spanclass', 'breadcrumb');
if ($_smarty_tpl->tpl_vars['node']->value->current) {
$_smarty_tpl->_assignInScope('spanclass', ($_smarty_tpl->tpl_vars['spanclass']->value).(' current'));
}?><span class="<?php echo $_smarty_tpl->tpl_vars['spanclass']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['node']->last) {
echo $_smarty_tpl->tpl_vars['node']->value->menutext;
} elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {
echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
&nbsp;<?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a><?php }?></span><?php if (!$_smarty_tpl->tpl_vars['node']->last) {?>&raquo;&nbsp;<?php }
$_smarty_tpl->tpl_vars['node'] = $__foreach_node_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
