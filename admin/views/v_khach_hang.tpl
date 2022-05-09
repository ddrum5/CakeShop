<div class="card mb-3">
  <div class="card-header">
    <div class="row">
      <div class="col col-6">
        <i class="fa fa-table"></i> Danh sách khách hàng
      </div>
      <div class="col col-6">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add">Thêm khách hàng
          mới</button>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      {include file="views/khach_hang/v_ds_khach_hang.tpl"}
    </div>
  </div>
</div>
<script src="public/js/ajax/ajax_delete_khach_hang.js"></script>

{if isset($smarty.session.thongBao)}
  <script>
    swal("{$smarty.session.thongBao}");
  </script>
{/if}
{if isset($smarty.session.thongBaoThanhCong)}
  <script>
    swal({
      title: "Thành công!",
      text: "{$smarty.session.thongBaoThanhCong}!",
      icon: "success"
    }).then(function() {
      $.ajax({
        success: function() {
          window.location = "khach_hang.php";
        }
      });
    });
  </script>
{/if}