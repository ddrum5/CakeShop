<?php
/* Smarty version 3.1.30, created on 2022-04-29 04:01:58
  from "C:\xampp\htdocs\Projects\shop_hoa\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b47166bf052_32009909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea1cb11e0023cc9467ab2600959b56b29a79607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\views\\v_khach_hang.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_thanh_danh_muc.tpl' => 1,
    'file:views/khach_hang/v_thong_tin.tpl' => 1,
    'file:views/khach_hang/v_thong_tin_don_hang.tpl' => 1,
  ),
),false)) {
function content_626b47166bf052_32009909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_thong_tin_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
