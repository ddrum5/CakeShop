<?php
/* Smarty version 3.1.30, created on 2022-05-08 08:30:35
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6277638b689ce0_82266967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1033a87572d1c53d780a3b1ebe987da1227586ff' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_tin_tuc.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_thanh_danh_muc.tpl' => 1,
    'file:views/tin_tuc/v_ds_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_6277638b689ce0_82266967 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_ds_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
