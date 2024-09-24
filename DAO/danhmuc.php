<?php
require_once 'pdo.php';

function get_dm_new($limi)
{
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function insert_dm($tendm, $fileup)
{
    $sql = "INSERT INTO danhmuc(tendm,fileup) VALUES (?,?)";
    pdo_execute($sql, $tendm, $fileup);
}

function danhmuc_delete($id)
{
    $sql = "DELETE FROM danhmuc WHERE  id=?";
    pdo_execute($sql, $id);
}

function danhmucchitiet_select($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function update_dm($tendm, $fileup, $id)
{
    if ($fileup != "") {
        $sql = 'UPDATE danhmuc SET tendm=?, fileup=? WHERE id=?';
        pdo_execute($sql, $tendm, $fileup, $id);
    } else {
        $sql = 'UPDATE danhmuc SET tendm=? WHERE id=?';
        pdo_execute($sql, $tendm, $id);
    }
}

function get_tongdanhmuc(){
    $sql = "SELECT COUNT(id) FROM danhmuc";
    return pdo_query_value($sql);
}

