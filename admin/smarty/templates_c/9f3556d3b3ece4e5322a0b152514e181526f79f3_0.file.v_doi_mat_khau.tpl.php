<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:30:00
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\views\v_doi_mat_khau.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f986102d2_98448287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3556d3b3ece4e5322a0b152514e181526f79f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\views\\v_doi_mat_khau.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626b3f986102d2_98448287 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <form method="POST" action="doi_mat_khau.php">
    <div class="form-group">
        <label for="tai_khoan">Tài khoản:</label>
        <input type="text" class="form-control" name="tai_khoan" id="tai_khoan" value="<?php if (isset($_COOKIE['taiKhoan'])) {
echo $_COOKIE['taiKhoan'];
}?>" disabled>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="mat_khau" id="mat_khau" placeholder="Nhập mật khẩu hiện tại">    
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="mat_khau_moi" id="mat_khau_moi"
        data-validation="strength" data-validation-strength="2" data-validation-error-msg="Mật khẩu bao gồm chữ và số và tối thiểu 8 ký tự"
        placeholder="Nhập mật khẩu mới">    
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="nl_mat_khau_moi" 
        data-validation="confirmation" data-validation-confirm="mat_khau_moi" data-validation-error-msg="Mật khẩu mới không trùng nhau" 
        placeholder="Nhập lại mật khẩu mới">
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Đổi mật khẩu</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$.validate({
		modules : 'location, date, security, file',
	});
	// Restrict presentation length
	$('#presentation').restrictLength( $('#pres-max-length') );
<?php echo '</script'; ?>
><?php }
}