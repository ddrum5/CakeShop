<?php
require_once("database.php");
class M_nav extends database
{
    public function hien_thi_hoa_don()
    {
        $sql="SELECT * FROM hoa_don WHERE trang_thai='Chưa xử lý' limit 3 ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}