<?php
/* Smarty version 3.1.30, created on 2022-05-09 13:31:18
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_thong_tin_ca_nhan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6278fb862da8e9_84281547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0391bd442bd3e9bf98dd00325d2542f80ca7dbf' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_thong_tin_ca_nhan.tpl',
      1 => 1652095857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6278fb862da8e9_84281547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="register">
	<div class="container">
		<h2 class="h2Login">Chỉnh sửa thông tin cá nhân</h2>
		<div class="login-form-grids">
			<h5>Thông tin cá nhân</h5>
			<form method="post" action="thong_tin_ca_nhan.php">
				<input type="text" name="hoTen" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->ten_khach_hang;?>
" placeholder="Họ tên..." required=" ">
				<div class="gioi_tinh">Giới tính:
					<label><input <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 1) {?> checked <?php }?> type="radio" value="1" name="phai">Nam</label>
					<label><input <?php if ($_smarty_tpl->tpl_vars['kh']->value->phai == 0) {?> checked <?php }?>  type="radio" value="0" name="phai">Nữ</label>
				</div>
				<input type="text" name="diaChi" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dia_chi;?>
" placeholder="Địa chỉ..." required=" ">
				<input type="text" name="dienThoai" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->dien_thoai;?>
" placeholder="Điện thoại..." required=" ">
				<h6>Thông tin đăng nhập</h6>
				<input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->email;?>
" placeholder="Nhập Email..." required=" ">
				<input type="password" name="matKhau" placeholder="Mật khẩu (Bỏ qua nếu bạn không đổi mật khẩu)..." >
				<input type="hidden" name=" matKhauCu" value="<?php echo $_smarty_tpl->tpl_vars['kh']->value->matKhau;?>
">
				<input type="submit" name="updateTT" value="Cập nhật thông tin">
			</form>
		</div>
		<div class="register-home">
			<a href=".">Trở Về Trang chủ</a>
		</div>
	</div>
</div>

<?php }
}
