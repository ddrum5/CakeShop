<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:28:56
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\views\v_loai_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f58c1ed20_36837722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c08d4fe89c381dce0f0c89b58bd9e9497de7c7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\views\\v_loai_hoa.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/loai_hoa/v_danh_sach_loai_hoa.tpl' => 1,
  ),
),false)) {
function content_626b3f58c1ed20_36837722 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách loại hoa</div>
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
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
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
