<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:28:25
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\views\v_them_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f39ce92f5_60140501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf8ad4896db6d96efd42994a63167089aa9ef18e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\views\\v_them_thanh_vien.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626b3f39ce92f5_60140501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label for="ten">Tên thành viên:</label>
        <input type="text" class="form-control" name="ten" placeholder="Nhập tên thành viên" required>
    </div>
    <div class="form-group">
        <label for="tai_khoan">Tài khoản:</label>
        <input type="text" class="form-control" name="tai_khoan" placeholder="Nhập tài khoản cần đặt" required>
    </div>
    <div class="form-group">
        <label for="mat_khau">Mật khẩu:</label>
        <input type="password" class="form-control" name="mat_khau" placeholder="Nhập mật khẩu cần đặt" required>    
    </div>
    <div class="form-group">
        <label for="recipient-name" class="form-control-label">Quyền:</label>
        <select class="form-control" name="permission">
            <option value="0">QL Dơn Hàng</option>
            <option value="1">Admin</option>
            <option value="2">QL Sản Phẩm</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_submit">Thêm thành viên</button>
    </form>
</div>
<?php }
}
