<?php
/* Smarty version 4.3.4, created on 2025-01-18 08:46:18
  from 'C:\xampp\htdocs\library\app\views\Librarian.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678b5c4acff159_03369240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01e4bb5329c32cb526e969897222cea8fd2e9ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Librarian.tpl',
      1 => 1737152599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678b5c4acff159_03369240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_612238910678b5c4ab3c1c8_73471117', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_612238910678b5c4ab3c1c8_73471117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_612238910678b5c4ab3c1c8_73471117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Tytuł</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Autor</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Imie</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nazwisko</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Szkody</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['borrows']->value, 'borrow');
$_smarty_tpl->tpl_vars['borrow']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['borrow']->value) {
$_smarty_tpl->tpl_vars['borrow']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['borrow']->value['returnDate'] == NULL) {?>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['title'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['author'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['firstName'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['borrow']->value['lastName'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <form action="reclaim" method="POST">
                        <input type="hidden" name="IdBorrow" value="<?php echo $_smarty_tpl->tpl_vars['borrow']->value['IdBorrow'];?>
">
                        <input type="text" name="damageDescription" value="" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
                </td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Zaktualizuj</button>
                    </form>
                </td>
            </tr>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <hr>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="title">Wyloguj</a>
<?php
}
}
/* {/block "main"} */
}
