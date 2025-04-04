<?php
/* Smarty version 4.3.4, created on 2025-04-04 11:46:37
  from 'C:\xampp\htdocs\library\app\views\Reader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67efaa7d1d5473_23266553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a32bc39fc9cf9292820570662bed2b4065ea431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Reader.tpl',
      1 => 1743759963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67efaa7d1d5473_23266553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11717840467efaa7d1a4a55_97335155', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_11717840467efaa7d1a4a55_97335155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11717840467efaa7d1a4a55_97335155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\library\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <form action="reader_list" method="POST" style="margin: 20px;">
        <label style="margin-right: 10px;"> </label>
        <input type="hidden" name="onlyAvailableBooks" value="no">
            <input type="checkbox" name="onlyAvailableBooks" value="yes" style="margin-right: 5px; display: inline-block; visibility: visible;">Pokaż tylko dostępne książki

        <label>
            <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="" disabled selected>Wybierz gatunek</option>
                <option value="Fantastyka">Fantastyka</option>
                <option value="Horror">Horror</option>
                <option value="Kryminał">Kryminał</option>
            </select>
        </label>
        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>
    <hr>
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
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['books']->value) > 0) {?>
        <div style="text-align: center; margin-top: 20px;">
            <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
                <a href="reader_list?page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
&genre=<?php echo $_smarty_tpl->tpl_vars['form']->value->genre;?>
&onlyAvailableBooks=<?php echo $_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks;?>
" style="margin-right: 10px;">⬅️ Poprzednia</a>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>
                    <strong><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</strong>
                <?php } else { ?>
                    <a href="reader_list?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&genre=<?php echo $_smarty_tpl->tpl_vars['form']->value->genre;?>
&onlyAvailableBooks=<?php echo $_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php }?>
            <?php }
}
?>

            <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['totalPages']->value) {?>
                <a href="reader_list?page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
&genre=<?php echo $_smarty_tpl->tpl_vars['form']->value->genre;?>
&onlyAvailableBooks=<?php echo $_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks;?>
" style="margin-left: 10px;">Następna ➡️</a>
            <?php }?>
        </div>
    <?php }?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="title">Wyloguj</a>
<?php
}
}
/* {/block "main"} */
}
