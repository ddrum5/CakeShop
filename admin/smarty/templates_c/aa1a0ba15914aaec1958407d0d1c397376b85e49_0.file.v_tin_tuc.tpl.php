<?php
/* Smarty version 3.1.30, created on 2022-05-07 16:19:39
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62767ffb8567c9_61129922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa1a0ba15914aaec1958407d0d1c397376b85e49' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\v_tin_tuc.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_danh_sach_tin_tuc.tpl' => 1,
    'file:views/tin_tuc/v_modal_them_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_62767ffb8567c9_61129922 (Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách tin tức
            </div>
            <div class="col col-6">
              <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add" >Thêm tin tức</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_danh_sach_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
          <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_modal_them_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_tin_tuc.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="public/js/input_file.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh_add.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="public/js/script_hien_thi_anh.js"><?php echo '</script'; ?>
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
                              window.location = "tin_tuc.php";
                          }
                        });
                    });
              <?php echo '</script'; ?>
>
            <?php }
}
}
