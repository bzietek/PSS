<?php
/* Smarty version 4.3.4, created on 2025-05-06 19:59:48
  from 'C:\xampp\htdocs\library\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681a4e1406d835_25404614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f13633d584ad3fb3fa709d7d72a481bcbf59ff4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\home.tpl',
      1 => 1746554354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681a4e1406d835_25404614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_453481875681a4e14060418_09532248', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_453481875681a4e14060418_09532248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_453481875681a4e14060418_09532248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2>Strona główna</h2>
    <div class="cms-main-text" style="padding: 10px; border: 1px solid #ccc;">
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmsText']->value, ENT_QUOTES, 'UTF-8', true);?>

    </div>

<?php
}
}
/* {/block "main"} */
}
