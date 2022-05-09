<?php
/* Smarty version 3.1.30, created on 2022-05-09 17:07:53
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\v_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62792e49162342_13883277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36db6a0d992448965210d53c9d870f2993841b1d' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\v_loai_hoa.tpl',
      1 => 1652094499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/loai_hoa/v_danh_sach_loai_hoa.tpl' => 1,
  ),
),false)) {
function content_62792e49162342_13883277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Example DataTables Card-->


<div class="card mb-3">
  <div class="card-header">
    <div class="row">
      <div class="col col-6"> <i class="fa fa-table"></i> Danh sách loại bánh </div>

      <div class="col col-6">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add">
          Thêm loại bánh mới</button>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <?php $_smarty_tpl->_subTemplateRender("file:views/loai_hoa/v_danh_sach_loai_hoa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>
  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_loai_hoa.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/ajax/ajax_kt_trung_loai_hoa.js"><?php echo '</script'; ?>
>

  <?php if (isset($_SESSION['thongBao'])) {?>
    <?php echo '<script'; ?>
>
      swal("<?php echo $_SESSION['thongBao'];?>
");
    <?php echo '</script'; ?>
>
  <?php }?>
  <?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
    <?php echo '<script'; ?>
>
      swal({
        title: "Thành công!",
        text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
        icon: "success"
      }).then(function() {
        $.ajax({
          success: function() {
            window.location = "loai_hoa.php";
          }
        });
      });
    <?php echo '</script'; ?>
>
<?php }
}
}
