{* Modal edit *}
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Thêm khách hàng mới
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="khach_hang.php">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Họ tên:</label>
                        <input type="text" class="form-control" name="tenKH">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Giới tính:</label>
                        <select class="form-control" name="gioiTinh">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="text" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diaChi">
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Số điện thoại:</label>
                        <input type="text" class="form-control" name="dienThoai">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mật khẩu: </label>
                        <input type="text" class="form-control" name="matKhau">

                    </div>


                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success" name="btn_add">Thêm khách hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{* end modal edit *}