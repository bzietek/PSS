<?php
/* Smarty version 4.3.4, created on 2025-01-17 21:27:38
  from 'C:\xampp\htdocs\library\app\views\ReaderList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678abd3a841748_54431057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1958dffae760fcdddfd26280d09c81f24a5a50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\ReaderList.tpl',
      1 => 1737137074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678abd3a841748_54431057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_362127066678abd3a6bf139_48743775', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_362127066678abd3a6bf139_48743775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_362127066678abd3a6bf139_48743775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\library\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
    <tr>
        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Tytuł</th>
        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Autor</th>
        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Gatunek</th>
        <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
    </tr>
    </thead>
    <tbody>
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['books']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['book']->value['author'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['book']->value['genreName'];?>
</td>

                <?php if ($_smarty_tpl->tpl_vars['book']->value['availableCopies'] > 0) {?>
                <form action="borrowBook" method="post">
                    <td style="border: 1px solid #ddd; padding: 8px;">
                      <input type="hidden" name="IdBook" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['IdBook'];?>
">
                      <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Wypożycz</button>
                    </td>
                </form>
                <?php } else { ?>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button type="submit" disabled">Brak</button>
                </td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <tr>
            <td colspan="4">Brak wyników</td>
        </tr>
    <?php }?>
    </tbody>
    </table>
    <hr>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reader_search"),$_smarty_tpl ) );?>
" class="title">Powrót do wyszukiwania</a>
<?php
}
}
/* {/block "main"} */
}
