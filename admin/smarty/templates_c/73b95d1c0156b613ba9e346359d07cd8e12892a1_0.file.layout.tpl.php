<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:27:38
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f0a4fce50_07971250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b95d1c0156b613ba9e346359d07cd8e12892a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\smarty\\templates\\layout.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/head.tpl' => 1,
    'file:layouts/body.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_626b3f0a4fce50_07971250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
