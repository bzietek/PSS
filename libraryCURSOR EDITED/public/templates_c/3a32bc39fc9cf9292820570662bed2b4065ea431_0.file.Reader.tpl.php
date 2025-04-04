<?php
/* Smarty version 4.3.4, created on 2025-04-04 09:54:40
  from 'C:\xampp\htdocs\library\app\views\Reader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ef9040341294_90539872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a32bc39fc9cf9292820570662bed2b4065ea431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Reader.tpl',
      1 => 1743753216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ef9040341294_90539872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144177950367ef9040330437_37568942', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_144177950367ef9040330437_37568942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_144177950367ef9040330437_37568942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="reader_list" method="POST" style="margin: 20px;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="searchTerm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->searchTerm;?>
" placeholder="Szukaj po tytule lub autorze..." style="padding: 5px; border: 1px solid #ccc; border-radius: 4px; width: 300px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="margin-right: 10px;">
                <input type="hidden" name="onlyAvailableBooks" value="no">
                <input type="checkbox" name="onlyAvailableBooks" value="yes" <?php if ($_smarty_tpl->tpl_vars['form']->value->onlyAvailableBooks == "yes") {?>checked<?php }?> style="margin-right: 5px;">Pokaż tylko dostępne książki
            </label>
        </div>

        <div style="margin-bottom: 15px;">
            <label>
                <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="" disabled <?php if (!$_smarty_tpl->tpl_vars['form']->value->genre) {?>selected<?php }?>>Wybierz gatunek</option>
                    <option value="Fantastyka" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Fantastyka") {?>selected<?php }?>>Fantastyka</option>
                    <option value="Horror" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Horror") {?>selected<?php }?>>Horror</option>
                    <option value="Kryminał" <?php if ($_smarty_tpl->tpl_vars['form']->value->genre == "Kryminał") {?>selected<?php }?>>Kryminał</option>
                </select>
            </label>
        </div>

        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>
    <hr>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="title">Wyloguj</a>
<?php
}
}
/* {/block "main"} */
}
