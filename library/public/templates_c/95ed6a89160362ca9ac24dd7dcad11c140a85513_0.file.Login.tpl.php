<?php
/* Smarty version 4.3.4, created on 2025-05-06 20:00:25
  from 'C:\xampp\htdocs\library\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681a4e3978c8b0_71321392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ed6a89160362ca9ac24dd7dcad11c140a85513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Login.tpl',
      1 => 1746554424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681a4e3978c8b0_71321392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1983475329681a4e3977b147_26772627', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_1983475329681a4e3977b147_26772627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1983475329681a4e3977b147_26772627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="col span_12">
            <h1>Logowanie</h1>
            <form action="login" method="POST">
                <label for="login">Nazwa użytkownika</label>
                <input id="login" name="login" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                <label for="password">Hasło</label>
                <input id="password" name="password" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
" style="width: 460px;">
                <div class="row">
                    <div class="col span_12">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"register_show"),$_smarty_tpl ) );?>
" class="title">Rejestracja</a>
                    </div>
                </div>
            <hr>
                <div class="row">
                    <div class="col span_12 " >
                        <button class="btn btn-large" type="submit">Zaloguj</button>
            </form>
                    </div>
                </div>
            <br>
            </div>
    <h2>Strona główna</h2>
    <div class="cms-main-text" style="padding: 10px; border: 1px solid #ccc;">
        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmsText']->value, ENT_QUOTES, 'UTF-8', true);?>

    </div>

<?php
}
}
/* {/block "main"} */
}
