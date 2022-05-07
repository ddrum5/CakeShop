<?php
/* Smarty version 3.1.30, created on 2022-05-07 13:28:24
  from "D:\Programs\xampp\htdocs\banhngotanan\views\khach_hang\v_thong_tin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627657d8590773_04305797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2811868c55c0546a135db679c5d7bf8b73f825e5' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\khach_hang\\v_thong_tin.tpl',
      1 => 1651893270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627657d8590773_04305797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-6 product-left-block">
  <h3 class="canh_giua khach_hang thong_tin">Thông tin</h3>
  <form name="them_khach_hang" method="post">
    <ul class="form-style-1">
      <li><label>Tên khách hàng </label><input type="text" name="ten_kh" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->ten_khach_hang;?>
"
          class="field-divided" /></li>
      <li>
        <label>Giới tính</label>
        <select name="phai" class="field-select phai">
          <option value="1" <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 1) {?> selected="selected" <?php }?>>Nam</option>
          <option value="0" <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 0) {?> selected="selected" <?php }?>>Nữ</option>
        </select>
      </li>
      <li>
        <label>Địa chỉ </label>
        <input type="text" name="dia_chi" class="field-long dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dia_chi;?>
" />
      </li>
      <li>
        <label>Điện thoại </label>
        <input type="text" name="dien_thoai" class="field-long dien_thoai" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dien_thoai;?>
" />
      </li>
            
 
      <li>
        <input type="submit" class="one khach_hang" value="Đặt hàng" name="luu" />
      </li>
    </ul>
</div><?php }
}
