<?php
require_once("database.php");
class M_loai_banh extends database
{
    function doc_tat_ca_loai_banh()
    {
        $sql = "select * from loai_hoa";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function them_loai_banh($tenLoai)
    {
        $sql = "INSERT INTO loai_hoa (TenLoai) VALUES ('$tenLoai')";
        $this->setQuery($sql);
        return $this->execute(array($sql));

    }
    function update_loai_banh($tenLoai, $maLoai)
    {
        $sql = "UPDATE loai_hoa SET TenLoai=? WHERE MaLoai=?";
        $this->setQuery($sql);
        return $this->execute(array($tenLoai, $maLoai));
    }
    function kiem_tra_loai_banh($tenLoai)
    {
        $sql = "SELECT TenLoai FROM loai_hoa WHERE TenLoai=?";
        $this->setQuery($sql);
        return $this->loadRow(array($tenLoai));
    }
}
?>