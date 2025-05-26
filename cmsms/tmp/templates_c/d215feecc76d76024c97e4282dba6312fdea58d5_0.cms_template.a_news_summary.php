<?php
/* Smarty version 4.5.2, created on 2025-05-27 01:12:41
  from 'cms_template:a_news_summary' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6834f569c07719_79037662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1748301160',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834f569c07719_79037662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/cmsms/lib/plugins/modifier.cms_date_format.php','function'=>'smarty_modifier_cms_date_format',),1=>array('file'=>'/var/www/html/cmsms/lib/plugins/modifier.cms_escape.php','function'=>'smarty_modifier_cms_escape',),2=>array('file'=>'/var/www/html/cmsms/lib/plugins/function.file_url.php','function'=>'smarty_function_file_url',),));
if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {?>
      <?php echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
      &nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

    <?php }?>
  </p>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
  <div class="news-summary-item">

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
      <div class="news-summary-date"><?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
</div>
    <?php }?>

    <div class="news-summary-title">
      <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
" title="<?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->category) {?>
      <div class="news-summary-category"><strong>Kategoria:</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->category;?>
</div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->author) {?>
      <div class="news-summary-author"><strong>Autor:</strong> <?php echo $_smarty_tpl->tpl_vars['entry']->value->author;?>
</div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
      <div class="news-summary-text">
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

      </div>

      <div class="news-summary-morelink">
        [<?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
]
      </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
      <div class="news-summary-text">
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

      </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['entry']->value->extra))) {?>
      <div class="news-summary-extra">
        <?php echo $_smarty_tpl->tpl_vars['entry']->value->extra;?>

      </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['entry']->value->fields))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entry']->value->fields, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <div class="news-summary-field">
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
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
