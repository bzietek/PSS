<?php
/* Smarty version 4.3.4, created on 2025-01-18 08:44:24
  from 'C:\xampp\htdocs\library\app\views\Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678b5bd83603d3_39213742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f367f681d451ab53cb369630bc5d3918722442c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Register.tpl',
      1 => 1737152328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678b5bd83603d3_39213742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1640805403678b5bd8356833_82785602', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_1640805403678b5bd8356833_82785602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1640805403678b5bd8356833_82785602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col span_12">
    <h1>Rejestracja</h1>
    <form action="register" method="POST">
        <label for="login">Login użytkownika</label>
        <input id="login" name="login" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        <label for="firstName">Imię</label>
        <input id="firstName" name="firstName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firstName;?>
">
        <label for="lastName">Nazwisko</label>
        <input id="lastName" name="lastName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lastName;?>
">
        <label for="password">Hasło</label>
        <input id="password" name="password" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" style="width: 460px;">
        <label for="repeatedPassword">Powtórz hasło</label>
        <input id="repeatedPassword" name="repeatedPassword" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->repeatedPassword;?>
" style="width: 460px";>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"login_show"),$_smarty_tpl ) );?>
" class="title">Powrót do logowania</a>
        <hr>
        <button class="btn btn-large" type="submit">Zarejestruj</button>
    </form>
        <br>
    </div>
<?php
}
}
/* {/block "main"} */
}
