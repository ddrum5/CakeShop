<div id="bsm_contact">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
        <h1>{$title}</h1>
    </div>
</div>
{if (count($hoa_dons)== 0)}
    
    <h1 style="text-align: center;">Bạn chưa có đơn hàng nào</h1>
{else}
    <div " class=" container">
    <div class="row">
        <div class="col-lg-8">
            <table class="w3-table-all">
                <thead>
                    <tr class="w3-green">
                        <th class="w3-text-white">Họ và tên</th>
                        <th class="w3-text-white">Sản phẩm đặt</th>
                        <th class="w3-text-white">Số lượng</th>
                        <th class="w3-text-white">Tổng tiền</th>
                        <th class="w3-text-white">Trạng thái</th>
                        <th class="w3-text-white">Thời gian</th>
                    </tr>
                </thead>
                {foreach $hoa_dons as $hoa_don}
                <tr>
                    <td class="w3-text-black w3-large">{$hoa_don->ten_khach_hang}</td>
                    <td><a href="san-pham/{$hoa_don->TenHoa_URL}-{$hoa_don->MaHoa}.html"
                            class="w3-text-black w3-hover-text-orange w3-large hidden_text"
                            target="_blank">{$hoa_don->TenHoa}</a></td>
                    <td class="w3-text-black w3-large">{$hoa_don->so_luong}</td>
                    <td class="w3-text-black w3-large">{number_format($hoa_don->tong_thanh_tien)} đ</td>
                    <td class="w3-text-black w3-large">{$hoa_don->trang_thai}</td>
                    <td class="w3-text-black w3-large">{$hoa_don->ngay_dat|date_format:'%H:%M %d-%m-%Y'}</td>
                </tr>
                {/foreach}
            </table>
        </div>
    </div>
</div>
{/if}



{if isset($smarty.session.status)}
<script>
    swal("{$smarty.session.status}");
    </script>
{/if}