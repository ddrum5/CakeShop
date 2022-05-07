<?php
    if(isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];
        include("database.php");
        $db = new database();
        $sql = "DELETE FROM khach_hang WHERE ma_khach_hang =?";
        $db->setQuery($sql);
        return $db->execute(array($id));
    }
?>