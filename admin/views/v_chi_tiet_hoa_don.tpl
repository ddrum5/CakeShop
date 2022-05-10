<div class="card mb-3">
  <div class="card-header print">
    <i class="fa fa-table"></i> Chi tiết hóa đơn
  </div>
  <form method="POST" action="chi_tiet_hoa_don.php?ma_hoa_don={$chi_tiet_hoa_don->ma_hoa_don}">
    <div class="card-body">
      <fieldset class="chi_tiet_hoa_don">

        <p><label>Mã Đơn Hàng:</label> {$chi_tiet_hoa_don->ma_hoa_don} </p>
        <p><label>Ngày lập hóa đơn: </label>{$chi_tiet_hoa_don->ngay_dat|date_format:' %Hh:%M %d-%m-%Y'}</p>
        <p><label>Trị giá: </label> {number_format($chi_tiet_hoa_don->tong_thanh_tien)} đồng</p>
        <p><label>Họ tên khách hàng: </label> {$chi_tiet_hoa_don->ten_khach_hang}</p>
        <p><label>Địa chỉ: </label> {$chi_tiet_hoa_don->dia_chi}</p>
        <p> <label>Điện thoại:</label> {$chi_tiet_hoa_don->dien_thoai}</p>
        <p> <label>Email: </label> {$chi_tiet_hoa_don->email}</p>
        <p> <label>Tình trạng: </label>

          <select name="trang_thai" id="trang_thai">
            {if $chi_tiet_hoa_don->trang_thai == 0}
              <option selected value="0">Chưa xác nhận</option>
              <option value="1">Đã xác nhận</option>
              <option value="2">Đang giao hàng</option>
              <option value="3">Đã giao hàng</option>

            {elseif $chi_tiet_hoa_don->trang_thai == 1}
              <option value="0">Chưa xác nhận</option>
              <option selected value="1">Đã xác nhận</option>
              <option value="2">Đang giao hàng</option>
              <option value="3">Đã giao hàng</option>

            {elseif $chi_tiet_hoa_don->trang_thai == 2}
              <option value="0">Chưa xác nhận</option>
              <option value="1">Đã xác nhận</option>
              <option selected value="2">Đang giao hàng</option>
              <option value="3">Đã giao hàng</option>

            {else}
              <option value="0">Chưa xác nhận</option>
              <option value="1">Đã xác nhận</option>
              <option value="2">Đang giao hàng</option>
              <option selected value="3">Đã giao hàng</option>
            {/if}
          </select>

        </p>

        {* <p><input class="button print btn btn-info" type="button" value="Cập nhật trạng thái đơn hàng" name="btnUpdate"/> *}
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
          {$stt=0}
          {foreach $doc_san_pham as $sp}
            {$stt=$stt+1}
            <tr>
              <td>{$stt}</td>
              <td>{$sp->TenHoa}</td>
              <td>{$sp->so_luong}</td>
              <td>{number_format($sp->GiaKhuyenMai)} đ</td>
              <td>{number_format($sp->GiaKhuyenMai*$sp->so_luong)} đ</td>
            </tr>
          {/foreach}
        </tbody>
      </table>
      <div class="pagination">
        <h4>Tổng thành tiền: {number_format($chi_tiet_hoa_don->tong_thanh_tien)} đồng</h4>

      </div>

      <p><input class="button print btn btn-success" type="button" value="In đơn hàng" name="btnIn"
          onclick="window.print()" /></p>

    </div>
  </form>
</div>


{if isset($smarty.session.thongBaoThanhCong)}
  <script>
    swal({
      title: "Thành công!",
      text: "{$smarty.session.thongBaoThanhCong}!",
      icon: "success"
    }).then(function() {
      window.location = "chi_tiet_hoa_don.php?ma_hoa_don={$chi_tiet_hoa_don->ma_hoa_don}";
    });
  </script>
{/if}