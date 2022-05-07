{* Modal edit *}
<div class="modal fade" id="edit{$khach_hang->ma_khach_hang}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 875px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin khách hàng: {$khach_hang->ten_khach_hang}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="khach_hang.php">
                    <input type="hidden" name="maKH" value="{$khach_hang->ma_khach_hang}">

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Họ tên:</label>
                        <input type="text" class="form-control" name="tenKH" value="{$khach_hang->ten_khach_hang}"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Email:</label>
                        <input type="text" class="form-control" name="email" value="{$khach_hang->email}"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diaChi" value="{$khach_hang->dia_chi}"
                            autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Số điện thoại:</label>
                        <input type="text" class="form-control" name="dienThoai" value="{$khach_hang->dien_thoai}"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Mật khẩu: </label>
                        <input type="text" class="form-control" name="matKhau" value="" autocomplete="off">
                        <input type="hidden" name="matKhauCu" value="{$khach_hang->matKhau}">
                    </div>


                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success" name="btn_update"
                            id="checkUpdate{$khach_hang->ma_khach_hang}">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{* end modal edit *}