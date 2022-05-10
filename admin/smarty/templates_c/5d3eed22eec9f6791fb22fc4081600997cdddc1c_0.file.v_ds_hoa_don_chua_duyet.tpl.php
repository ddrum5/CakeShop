<?php
/* Smarty version 3.1.30, created on 2022-05-10 11:55:42
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\index\v_ds_hoa_don_chua_duyet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627a369e26aad3_02704960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3eed22eec9f6791fb22fc4081600997cdddc1c' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\index\\v_ds_hoa_don_chua_duyet.tpl',
      1 => 1652176073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a369e26aad3_02704960 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
 <div class="card-header">
   <i class="fa fa-table"></i> Danh sách hóa đơn chưa duyệt
 </div>
 <div class="card-body">
   <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <thead>
         <tr>
           <th>Mã đơn hàng</th>
           <th>Khách hàng</th>
           <th>Ngày đặt</th>
           <th>Tổng tiền</th>
           <th>Trạng thái</th>
           <th>Hành động</th>
         </tr>
       </thead>
       <tbody>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_don']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
           <tr id="delete<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
">
             <td>
               <a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
" title="Xem chi tiết đơn hàng"
                 target="_blank">
                 <?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>

               </a>
             </td>
             <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
             <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%d-%m-%Y');?>
</td>
             <td><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>
             <?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 0) {?>
               <td>Chưa xác nhận</td>
             <?php } elseif ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 1) {?>
               <td>Đã xác nhận</td>
             <?php } elseif ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 2) {?>
               <td>Đang giao hàng</td>
             <?php } else { ?>
               <td>Đã giao hàng</td>
             <?php }?>
             <td>
               <button type="button" onclick="updateAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-success">Xác nhận đơn
                 hàng</button>
               <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
)" class="btn btn-danger">Xóa</button>
             </td>
           </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


       </tbody>
     </table>
   </div>
</div><?php }
}
