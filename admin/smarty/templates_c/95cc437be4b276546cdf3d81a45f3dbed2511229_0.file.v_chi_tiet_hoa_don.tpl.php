<?php
/* Smarty version 3.1.30, created on 2022-05-10 12:51:38
  from "D:\Programs\xampp\htdocs\banhngotanan\admin\views\v_chi_tiet_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627a43ba111239_25778426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95cc437be4b276546cdf3d81a45f3dbed2511229' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\views\\v_chi_tiet_hoa_don.tpl',
      1 => 1652179891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a43ba111239_25778426 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\admin\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="card mb-3">
  <div class="card-header print">
    <i class="fa fa-table"></i> Chi tiết hóa đơn
  </div>
  <form method="POST" action="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ma_hoa_don;?>
">
  <div class="card-body">
    <fieldset class="chi_tiet_hoa_don">

      <p><label>Mã Đơn Hàng:</label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ma_hoa_don;?>
 </p>
      <p><label>Ngày lập hóa đơn: </label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ngay_dat,' %Hh:%M %d-%m-%Y');?>
</p>
      <p><label>Trị giá: </label> <?php echo number_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->tong_thanh_tien);?>
 đồng</p>
      <p><label>Họ tên khách hàng: </label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ten_khach_hang;?>
</p>
      <p><label>Địa chỉ: </label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->dia_chi;?>
</p>
      <p> <label>Điện thoại:</label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->dien_thoai;?>
</p>
      <p> <label>Email: </label> <?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->email;?>
</p>
      <p> <label>Tình trạng: </label>

        <select name="trang_thai" id="trang_thai">
          <?php if ($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->trang_thai == 0) {?>
            <option selected value="0">Chưa xác nhận</option>
            <option value="1">Đã xác nhận</option>
            <option value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>

          <?php } elseif ($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->trang_thai == 1) {?>
            <option value="0">Chưa xác nhận</option>
            <option selected value="1">Đã xác nhận</option>
            <option value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>

          <?php } elseif ($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->trang_thai == 2) {?>
            <option value="0">Chưa xác nhận</option>
            <option value="1">Đã xác nhận</option>
            <option selected value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>

          <?php } else { ?>
            <option value="0">Chưa xác nhận</option>
            <option value="1">Đã xác nhận</option>
            <option value="2">Đang giao hàng</option>
            <option selected value="3">Đã giao hàng</option>
          <?php }?>
        </select>

      </p>

      
      <button type="submit" name="btnUpdateTrangThai" class="btn btn-info">Xác nhận đơn
        hàng</button>
      </p>
    </fieldset>
    <div class="clear"></div>
    <div class="tieu_de">
      <h1>Chi tiết hóa đơn</h1>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>STT</th>
          <th>Sản phẩm</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
          <th>Thành tiền</th>
        </tr>
      </thead>
      <tbody>
        <?php $_smarty_tpl->_assignInScope('stt', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_san_pham']->value, 'sp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
?>
          <?php $_smarty_tpl->_assignInScope('stt', $_smarty_tpl->tpl_vars['stt']->value+1);
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->TenHoa;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->so_luong;?>
</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai);?>
 đ</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->GiaKhuyenMai*$_smarty_tpl->tpl_vars['sp']->value->so_luong);?>
 đ</td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody>
    </table>
    <div class="pagination">
      <h4>Tổng thành tiền: <?php echo number_format($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->tong_thanh_tien);?>
 đồng</h4>

    </div>

    <p><input class="button print btn btn-success" type="button" value="In đơn hàng" name="btnIn"
        onclick="window.print()" /></p>

  </div>
  </form>
</div>


<?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
    <?php echo '<script'; ?>
>
      swal({
        title: "Thành công!",
        text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
        icon: "success"
      }).then(function() {
        window.location = "chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value->ma_hoa_don;?>
";
      });
    <?php echo '</script'; ?>
>
<?php }
}
}
