<?php
/* Smarty version 4.3.4, created on 2025-01-18 08:45:49
  from 'C:\xampp\htdocs\library\app\views\Reader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678b5c2d51ce31_73747035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a32bc39fc9cf9292820570662bed2b4065ea431' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Reader.tpl',
      1 => 1737152372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678b5c2d51ce31_73747035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1393784804678b5c2d51aa15_86318145', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_1393784804678b5c2d51aa15_86318145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1393784804678b5c2d51aa15_86318145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="title">Wyloguj</a>
<?php
}
}
/* {/block "main"} */
}
