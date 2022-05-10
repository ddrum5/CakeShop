<?php
if (isset($_POST['update_id'])) {
    $id = $_POST['update_id'];
    include("database.php");
    $db = new database();
    $sql = "UPDATE hoa_don set  trang_thai = 1 WHERE ma_hoa_don = ?";
    $db->setQuery($sql);
    return $db->execute(array($id));
}

?>