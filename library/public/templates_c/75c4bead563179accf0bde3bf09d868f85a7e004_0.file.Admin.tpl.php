<?php
/* Smarty version 4.3.4, created on 2025-05-06 19:55:29
  from 'C:\xampp\htdocs\library\app\views\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681a4d11e68bc2_48954956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c4bead563179accf0bde3bf09d868f85a7e004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Admin.tpl',
      1 => 1746553864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681a4d11e68bc2_48954956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407048730681a4d11e5cb15_76288112', "main");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_1407048730681a4d11e5cb15_76288112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1407048730681a4d11e5cb15_76288112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Imie</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nazwisko</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Rola</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nowa rola</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['roleName'];?>
</td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <form action="updateRole" method="POST">
                        <input type="hidden" name="IdUser" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['IdUser'];?>
">
                        <select name="newRole" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
                            <option value="czytelnik">czytelnik</option>
                            <option value="bibliotekarz">bibliotekarz</option>
                            <option value="admin">admin</option>
                        </select>
                </td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Ustaw</button>
                </td>
                </form>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <hr>
    <div class="admin-links">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'cms_panel'),$_smarty_tpl ) );?>
" style="padding: 10px; display: inline-block; background-color: #eee; border-radius: 4px;">
            🛠️ Edytuj treść strony głównej (CMS)
        </a>
    </div>

    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
" class="title">Wyloguj</a>
<?php
}
}
/* {/block "main"} */
}
