<div class="register">
	<div class="container">
		<h2 class="h2Login">Chỉnh sửa thông tin cá nhân</h2>
		<div class="login-form-grids">
			<h5>Thông tin cá nhân</h5>
			<form method="post" action="thong_tin_ca_nhan.php">
				<input type="text" name="hoTen" value="{$kh->ten_khach_hang}" placeholder="Họ tên..." required=" ">
				<div class="gioi_tinh">Giới tính:
					<label><input {if $kh->phai == 1} checked {/if} type="radio" value="1" name="phai">Nam</label>
					<label><input {if $kh->phai == 0} checked {/if}  type="radio" value="0" name="phai">Nữ</label>
				</div>
				<input type="text" name="diaChi" value="{$kh->dia_chi}" placeholder="Địa chỉ..." required=" ">
				<input type="text" name="dienThoai" value="{$kh->dien_thoai}" placeholder="Điện thoại..." required=" ">
				<h6>Thông tin đăng nhập</h6>
				<input type="email" name="email" value="{$kh->email}" placeholder="Nhập Email..." required=" ">
				<input type="password" name="matKhau" placeholder="Mật khẩu (Bỏ qua nếu bạn không đổi mật khẩu)..." >
				<input type="hidden" name=" matKhauCu" value="{$kh->matKhau}">
				<input type="submit" name="updateTT" value="Cập nhật thông tin">
			</form>
		</div>
		<div class="register-home">
			<a href=".">Trở Về Trang chủ</a>
		</div>
	</div>
</div>

