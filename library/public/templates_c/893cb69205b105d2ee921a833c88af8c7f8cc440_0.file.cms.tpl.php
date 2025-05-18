<?php
/* Smarty version 4.3.4, created on 2025-05-18 16:37:05
  from 'C:\xampp\htdocs\library\app\views\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6829f09182f7c4_03804361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '893cb69205b105d2ee921a833c88af8c7f8cc440' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\cms.tpl',
      1 => 1747578966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6829f09182f7c4_03804361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5925119186829f091827e86_07320913', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_5925119186829f091827e86_07320913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5925119186829f091827e86_07320913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="max-width: 800px; margin: 0 auto;">
        <h2>🛠️ CMS – Edycja strony głównej</h2>

        <?php if ($_smarty_tpl->tpl_vars['updatedAt']->value) {?>
            <p style="font-size: 14px; color: #777;">Ostatnia aktualizacja: <?php echo $_smarty_tpl->tpl_vars['updatedAt']->value;?>
</p>
        <?php }?>

        <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'cms_save'),$_smarty_tpl ) );?>
">
            <label for="mainText">Treść strony głównej:</label><br>
            <textarea id="mainText" name="mainText" rows="10" style="width: 100%; padding: 10px; font-family: inherit;"><?php echo $_smarty_tpl->tpl_vars['mainText']->value;?>
</textarea>

            <div style="margin-top: 10px;">
                <button type="submit" class="btn">💾 Zapisz</button>
                <button type="submit" name="clear" value="1" class="btn" style="background-color: #c0392b;">🗑️ Wyczyść</button>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'admin_show'),$_smarty_tpl ) );?>
" class="btn" style="background-color: #7f8c8d;">🔙 Powrót</a>
            </div>
        </form>
    </div>

<?php
}
}
/* {/block "main"} */
}
