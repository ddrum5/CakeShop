<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:27:38
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\views\v_index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f0a673670_04383320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf638c8c281d0bc472b13db18b69661499cc557' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\views\\v_index.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/index/v_don_hang.tpl' => 1,
    'file:views/index/v_san_pham.tpl' => 1,
    'file:views/index/v_ds_hoa_het_hang.tpl' => 1,
  ),
),false)) {
function content_626b3f0a673670_04383320 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_COOKIE['permission'] == 1 || $_COOKIE['permission'] == 0) {?> 
  <?php $_smarty_tpl->_subTemplateRender("file:views/index/v_don_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="container auto_refresh">
    <div class="card mb-3" id="chua_duyet"></div>
  <?php } else { ?>
   <?php $_smarty_tpl->_subTemplateRender("file:views/index/v_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="card mb-3" id="het_hang">
      <?php $_smarty_tpl->_subTemplateRender("file:views/index/v_ds_hoa_het_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  <?php }?>
</div>
	<?php echo '<script'; ?>
 src="public/js/ajax/ajax_update_hoa_don.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_hoa_don.js"><?php echo '</script'; ?>
>
<?php }
}
