<?php
/* Smarty version 4.5.2, created on 2025-05-27 00:21:34
  from 'cms_template:a_news_detail' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834e96e8af2c5_56999797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a89637bfc15d2d655bd65897a2ae9ebf8c9f5' => 
    array (
      0 => 'cms_template:a_news_detail',
      1 => '1748297947',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834e96e8af2c5_56999797 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),2=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.file_url.php','function'=>'smarty_function_file_url',),3=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.global_content.php','function'=>'smarty_function_global_content',),));
if ((isset($_smarty_tpl->tpl_vars['entry']->value->canonical))) {?>
  <?php $_smarty_tpl->_assignInScope('canonical', $_smarty_tpl->tpl_vars['entry']->value->canonical ,false ,32);
}?>

<div class="news-detail">

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
    <div class="news-postdate">
      <?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

    </div>
  <?php }?>

  <h2 class="news-title"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h2>

  <hr class="news-separator" />

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
    <div class="news-summary">
      <strong><?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>
</strong>
    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?>
    <div class="news-category">
      <strong>Kategoria:</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>

    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
    <div class="news-author">
      <strong>Autor:</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>

    </div>
  <?php }?>

  <div class="news-content">
    <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

  </div>

  <?php if ($_smarty_tpl->tpl_vars['entry']->value->extra) {?>
    <div class="news-extra">
      <strong>Dodatkowe info:</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

    </div>
  <?php }
if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
<div id="NewsPostDetailReturnLink"><?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></div>
<?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['entry']->value->fields))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field', false, 'fieldname');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldname']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
      <div class="news-field">
        <?php if ($_smarty_tpl->tpl_vars['field']->value->type == 'file') {?>
          <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->value)) && $_smarty_tpl->tpl_vars['field']->value->value) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entry']->value->file_location;?>
/<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" />
          <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type == 'linkedfile') {?>
          <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>
            <img src="<?php echo smarty_function_file_url(array('file'=>$_smarty_tpl->tpl_vars['field']->value->value),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
" />
          <?php }?>
        <?php } else { ?>
          <strong><?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>

        <?php }?>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</div>

<?php echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
