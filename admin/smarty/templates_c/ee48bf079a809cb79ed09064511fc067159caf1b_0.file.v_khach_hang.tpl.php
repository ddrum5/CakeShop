<?php
/* Smarty version 3.1.30, created on 2022-05-18 13:33:33
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\v_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6284d98db73358_95941520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee48bf079a809cb79ed09064511fc067159caf1b' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\v_khach_hang.tpl',
      1 => 1651983002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_ds_khach_hang.tpl' => 1,
  ),
),false)) {
function content_6284d98db73358_95941520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card mb-3">
  <div class="card-header">
    <div class="row">
      <div class="col col-6">
        <i class="fa fa-table"></i> Danh sách khách hàng
      </div>
      <div class="col col-6">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add">Thêm khách hàng
          mới</button>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_ds_khach_hang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
  </div>
</div>
<?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_khach_hang.js"><?php echo '</script'; ?>
>

<?php if (isset($_SESSION['thongBao'])) {?>
  <?php echo '<script'; ?>
>
    swal("<?php echo $_SESSION['thongBao'];?>
");
  <?php echo '</script'; ?>
>
<?php }
if (isset($_SESSION['thongBaoThanhCong'])) {?>
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
          window.location = "khach_hang.php";
        }
      });
    });
  <?php echo '</script'; ?>
>
<?php }
}
}
