<!-- Example DataTables Card-->
{* <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh sách Loại bánh</div> *}

<div class="card mb-3">
  <div class="card-header">
    <div class="row">
      <div class="col col-6"> <i class="fa fa-table"></i> Danh sách loại bánh </div>

      <div class="col col-6">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#add">
          Thêm loại bánh mới</button>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      {include file="views/loai_hoa/v_danh_sach_loai_hoa.tpl"}
    </div>
  </div>
  <script src="public/js/ajax/ajax_delete_loai_hoa.js"></script>
  <script src="public/js/ajax/ajax_kt_trung_loai_hoa.js"></script>

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
            window.location = "loai_hoa.php";
          }
        });
      });
    </script>
{/if}