<?php
/* Smarty version 3.1.30, created on 2022-05-07 16:19:25
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\khach_hang\v_ds_khach_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62767fed3a5981_99725498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee7c40f6d94f95dfb6a17fd7577e156b774747b1' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\khach_hang\\v_ds_khach_hang.tpl',
      1 => 1651928199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/khach_hang/v_modal_sua_kh.tpl' => 1,
  ),
),false)) {
function content_62767fed3a5981_99725498 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Họ tên</th>
      <th>Giới tính</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Số điện thoại</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_tat_ca_khach_hang']->value, 'khach_hang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khach_hang']->value) {
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ten_khach_hang;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->phai;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->email;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dia_chi;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->dien_thoai;?>
</td>
        <td>
          <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
"
            data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
">Sửa</button>
          <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['khach_hang']->value->ma_khach_hang;?>
)" class="btn btn-danger">Xóa</button>
        </td>
      </tr>
      <?php $_smarty_tpl->_subTemplateRender("file:views/khach_hang/v_modal_sua_kh.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table><?php }
}
