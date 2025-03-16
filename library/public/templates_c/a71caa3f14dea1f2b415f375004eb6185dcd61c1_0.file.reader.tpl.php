<?php
/* Smarty version 4.3.4, created on 2025-01-17 12:53:41
  from 'C:\xampp\htdocs\library\app\views\reader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678a44c5145942_43061255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71caa3f14dea1f2b415f375004eb6185dcd61c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\reader.tpl',
      1 => 1737114814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678a44c5145942_43061255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_586242317678a44c5145215_58541911', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_586242317678a44c5145215_58541911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_586242317678a44c5145215_58541911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="reader" method="POST" style="margin: 20px;">
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

<?php
}
}
/* {/block "main"} */
}
