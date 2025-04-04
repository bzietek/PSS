<?php
/* Smarty version 4.3.4, created on 2025-01-16 14:19:17
  from 'C:\xampp\htdocs\library\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678907558cc792_76656866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843d14fb82b7330497dc141ef4085cccd3a88b2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\views\\Login.tpl',
      1 => 1737033549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678907558cc792_76656866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903029672678907558ca594_54204674', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block "main"} */
class Block_903029672678907558ca594_54204674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_903029672678907558ca594_54204674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row special">
        <div class="col span_24">
            <h3 class="align-center">Właściwym celem książek jest zmusić umysł, żeby myślał po swojemu    <br>Cecil Morley</h3>
        </div>
    </div>



    <div class="row padding">
        <div class="col span_8">



        </div>
        <div class="col span_12">

            <!-- Offer submission form. Please don't change inputs' IDs and names. -->
            <h2>Logowanie</h2>
            <div id="Offer">
                <div class="row">
                    <div class="col span_12">
                        <input type="text" placeholder="Login" id="f_name" name="f_name" >
                    </div>
                </div>
                <div class="row">
                    <div class="col span_12">
                        <input type="text" placeholder="Hasło" id="f_email" name="f_email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col span_12">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"register"),$_smarty_tpl ) );?>
" class="title">Rejestracja</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col span_12 ">
                        <button class="btn btn-large" type="button">Zaloguj</button>
                    </div>
                </div>

            </div> <!-- end of offer form -->

            <!-- Result Messages -->
            <div class="row" id="error_msg">

                <div class="col span_24">
                    <b>Sorry, but there were error(s) found with the form you submitted:
                        <i></i></b>
                    <br><a href="javascript:void(0);" id="new_try">Got it, retry.</a>
                </div>
            </div>
            <div class="row" id="msg">
                <div class="col span_24">
                    <b>Offer sent!</b>
                    <br><a href="javascript:void(0);" id="new_offer">Make another one?</a>
                </div>
            </div>
            <!-- End of Result Messages -->

        </div> <!-- end of col span_16 -->

        <div class="col span 7">
            tu będą błędy
        </div>
    </div> <!-- end of row -->
    </div>
<?php
}
}
/* {/block "main"} */
}
