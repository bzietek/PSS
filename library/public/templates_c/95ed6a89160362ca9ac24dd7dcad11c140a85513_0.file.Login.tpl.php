<?php
/* Smarty version 4.3.4, created on 2025-05-18 16:44:40
  from 'C:\xampp\htdocs\library\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6829f2589d55b5_96888753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ed6a89160362ca9ac24dd7dcad11c140a85513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Login.tpl',
      1 => 1747579467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6829f2589d55b5_96888753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6270718626829f258881371_29685039', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_6270718626829f258881371_29685039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_6270718626829f258881371_29685039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row padding">
        <!-- Panel logowania -->
        <div class="col span_12">
            <h1>Logowanie</h1>
            <form action="login" method="POST">
                <label for="login">Nazwa użytkownika</label>
                <input id="login" name="login" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />

                <label for="password">Hasło</label>
                <input id="password" name="password" type="text" />

                <div style="margin-top: 10px;">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'register_show'),$_smarty_tpl ) );?>
" class="title">Rejestracja</a>
                </div>

                <div style="margin-top: 10px;">
                    <button class="btn btn-large" type="submit">Zaloguj</button>
                </div>

            </form>

            <!-- Komunikaty -->
            <ul class="errors" style="margin-top: 12px;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <?php if (is_object($_smarty_tpl->tpl_vars['msg']->value)) {?>
                        <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <!-- Panel CMS: strona główna -->
        <div class="col span_12">
            <h1>Strona główna</h1>
            <div class="cms-main-text" style="padding: 10px; border: 1px solid #ccc; background-color: #f8f8f8;">
                <?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['cmsText']->value, ENT_QUOTES, 'UTF-8', true), (bool) 1);?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['cmsUpdated']->value) {?>
                <p style="font-size: 12px; color: #777; margin-top: 5px;">
                    🔄 Ostatnia aktualizacja: <?php echo $_smarty_tpl->tpl_vars['cmsUpdated']->value;?>

                </p>
            <?php }?>

        </div>
    </div>


<?php
}
}
/* {/block "main"} */
}
