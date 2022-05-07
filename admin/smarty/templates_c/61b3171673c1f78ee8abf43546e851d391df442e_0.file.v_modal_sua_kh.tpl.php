<?php
/* Smarty version 3.1.30, created on 2022-05-07 16:37:13
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\khach_hang\v_modal_sua_kh.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62768419070cb8_61779215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b3171673c1f78ee8abf43546e851d391df442e' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\khach_hang\\v_modal_sua_kh.tpl',
      1 => 1651934176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62768419070cb8_61779215 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin khách hàng: <?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="khach_hang.php">
                    <input type="hidden" name="maKH" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Họ tên:</label>
                        <input type="text" class="form-control" name="tenKH" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->email;?>
"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diaChi" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dia_chi;?>
"
                            autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Số điện thoại:</label>
                        <input type="text" class="form-control" name="dienThoai" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dien_thoai;?>
"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mật khẩu: </label>
                        <input type="text" class="form-control" name="matKhau" value="" autocomplete="off">
                        <input type="hidden" name="matKhauCu" value="<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->matKhau;?>
">
                    </div>


                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success" name="btn_update"
                            id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
