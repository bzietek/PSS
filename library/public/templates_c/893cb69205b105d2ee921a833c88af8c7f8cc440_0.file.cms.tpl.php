<?php
/* Smarty version 4.3.4, created on 2025-05-06 19:55:31
  from 'C:\xampp\htdocs\library\app\views\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681a4d13deedb3_84833007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893cb69205b105d2ee921a833c88af8c7f8cc440' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\cms.tpl',
      1 => 1746553575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681a4d13deedb3_84833007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226559251681a4d13dea3e1_66728300', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'main'} */
class Block_226559251681a4d13dea3e1_66728300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_226559251681a4d13dea3e1_66728300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2>CMS – Edycja strony głównej</h2>

    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'cms_save'),$_smarty_tpl ) );?>
" method="post">
        <label for="mainText">Treść strony głównej:</label><br>
        <textarea name="mainText" id="mainText" rows="10" style="width: 100%;"><?php echo $_smarty_tpl->tpl_vars['mainText']->value;?>
</textarea><br><br>
        <button type="submit" style="padding: 8px 16px;">Zapisz</button>
    </form>

<?php
}
}
/* {/block 'main'} */
}
