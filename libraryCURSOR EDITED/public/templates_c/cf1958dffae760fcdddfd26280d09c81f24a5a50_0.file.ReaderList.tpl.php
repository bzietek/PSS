<?php
/* Smarty version 4.3.4, created on 2025-04-04 10:27:02
  from 'C:\xampp\htdocs\library\app\views\ReaderList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ef97d6279be7_24889630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1958dffae760fcdddfd26280d09c81f24a5a50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\ReaderList.tpl',
      1 => 1743755220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ef97d6279be7_24889630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214718634067ef97d625cb26_13265045', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_214718634067ef97d625cb26_13265045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_214718634067ef97d625cb26_13265045',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\library\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reader_list'),$_smarty_tpl ) );?>
" method="GET" style="margin: 20px;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="searchTerm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->searchTerm;?>
" placeholder="Szukaj po tytule lub autorze..." style="padding: 5px; border: 1px solid #ccc; border-radius: 4px; width: 300px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="margin-right: 10px;">
                <input type="checkbox" name="onlyAvailableBooks" value="yes" <?php if ($_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks == "yes") {?>checked<?php }?> style="margin-right: 5px;">Pokaż tylko dostępne książki
            </label>
        </div>

        <div style="margin-bottom: 15px;">
            <label>
                <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="" <?php if (!$_smarty_tpl->tpl_vars['form']->value->genre) {?>selected<?php }?>>Wszystkie gatunki</option>
                    <option value="Fantastyka" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Fantastyka") {?>selected<?php }?>>Fantastyka</option>
                    <option value="Horror" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Horror") {?>selected<?php }?>>Horror</option>
                    <option value="Kryminał" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Kryminał") {?>selected<?php }?>>Kryminał</option>
                </select>
            </label>
        </div>

        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>

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
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'borrowBook'),$_smarty_tpl ) );?>
" method="post">
                    <td style="border: 1px solid #ddd; padding: 8px;">
                      <input type="hidden" name="IdBook" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['IdBook'];?>
">
                      <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Wypożycz</button>
                    </td>
                </form>
                <?php } else { ?>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button disabled style="padding: 5px 10px; background-color: #ccc; color: white; border: none; border-radius: 4px;">Brak</button>
                </td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <tr>
            <td colspan="4" style="text-align: center; padding: 20px;">Brak wyników</td>
        </tr>
    <?php }?>
    </tbody>
    </table>

    <?php if ($_smarty_tpl->tpl_vars['totalPages']->value > 1) {?>
    <div style="margin-top: 20px; text-align: center;">
        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reader_list','page'=>$_smarty_tpl->tpl_vars['currentPage']->value-1,'searchTerm'=>$_smarty_tpl->tpl_vars['form']->value->searchTerm,'genre'=>$_smarty_tpl->tpl_vars['form']->value->genre,'onlyAvailableBooks'=>$_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks),$_smarty_tpl ) );?>
" style="margin-right: 10px;">&laquo; Poprzednia</a>
        <?php }?>
        
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>
                <span style="margin: 0 5px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
            <?php } else { ?>
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reader_list','page'=>$_smarty_tpl->tpl_vars['i']->value,'searchTerm'=>$_smarty_tpl->tpl_vars['form']->value->searchTerm,'genre'=>$_smarty_tpl->tpl_vars['form']->value->genre,'onlyAvailableBooks'=>$_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks),$_smarty_tpl ) );?>
" style="margin: 0 5px;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
            <?php }?>
        <?php }
}
?>
        
        <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['totalPages']->value) {?>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'reader_list','page'=>$_smarty_tpl->tpl_vars['currentPage']->value+1,'searchTerm'=>$_smarty_tpl->tpl_vars['form']->value->searchTerm,'genre'=>$_smarty_tpl->tpl_vars['form']->value->genre,'onlyAvailableBooks'=>$_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks),$_smarty_tpl ) );?>
" style="margin-left: 10px;">Następna &raquo;</a>
        <?php }?>
    </div>
    <?php }?>

    <hr>
    <div style="margin-top: 20px;">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" class="button" style="padding: 5px 10px; background-color: #f44336; color: white; text-decoration: none; border-radius: 4px;">Wyloguj</a>
    </div>
<?php
}
}
/* {/block "main"} */
}
