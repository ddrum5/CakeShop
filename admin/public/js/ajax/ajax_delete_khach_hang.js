function deleteAjax(id){
    swal({
        title: "Bạn có đồng ý xóa",
        text: "Sau khi đã bị xóa, bạn sẽ không thể khôi phục khách hàng này!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }) 
      .then((isConfirm) => {
        if (isConfirm) {
            $.ajax({
                type:'post',
                url:'models/delete_khach_hang.php',
                data:{delete_id:id},
                success:function(data){
                    $('#delete'+id).hide('slow');
                }
            })
            swal("Đã xóa khách hàng", {
                icon: "success",
            });
        }
    });
}


    
    