<?php
/* Smarty version 3.1.30, created on 2022-05-07 16:19:43
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\loai_hoa\v_modal_them_loai_banh.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62767fffce5506_80704152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb426126a0028af00931730a3fa947cf5dab0329' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\loai_hoa\\v_modal_them_loai_banh.tpl',
      1 => 1651843515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62767fffce5506_80704152 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm loại bánh mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="loai_hoa.php">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label">Tên Loại bánh:</label>
            <input type="text" class="form-control ten_loai" name="ten_loai" autocomplete="off">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-success" name="btn_add">Thêm</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php }
}
