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
    {foreach $ds_tat_ca_khach_hang as $khach_hang}
      <tr>
        <td>{$khach_hang->ten_khach_hang}</td>
        <td>{$khach_hang->phai}</td>
        <td>{$khach_hang->email}</td>
        <td>{$khach_hang->dia_chi}</td>
        <td>{$khach_hang->dien_thoai}</td>
        <td>
          <button type="button" class="btn btn-primary" onclick="getId({$khach_hang->ma_khach_hang})"
            id="update{$khach_hang->ma_khach_hang}" data-toggle="modal"
            data-target="#edit{$khach_hang->ma_khach_hang}">Sửa</button>
          <button type="button" onclick="deleteAjax({$khach_hang->ma_khach_hang})" class="btn btn-danger">Xóa</button>
        </td>
      </tr>
      {include file="views/khach_hang/v_modal_sua_kh.tpl" }
      {include file="views/khach_hang/v_modal_them_kh.tpl" }

    {/foreach}
  </tbody>
</table>