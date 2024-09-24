<?php
require_once 'pdo.php';

function get_dssp_new($limi)
{
    $sql = "SELECT sanpham.*, danhmuc.tendm FROM sanpham 
            INNER JOIN danhmuc ON sanpham.iddm = danhmuc.id 
            ORDER BY sanpham.id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_product_iddm($iddm, $limi)
{
    $sql = "SELECT * FROM sanpham WHERE 1 ";
    if ($iddm > 0) {
        $sql .= "AND iddm = " . $iddm;
    } else {
        $sql .= " ORDER BY id DESC limit " . $limi;
        return pdo_query($sql);
    }

    return pdo_query($sql);
}

function show_sp($limi)
{
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function insert_sp($tensp, $preptime, $cooktime, $iddm, $content, $congthuc, $fileup)
{
    $sql = "INSERT INTO sanpham(tensp, preptime, cooktime, iddm, content, congthuc, fileup) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $tensp, $preptime, $cooktime, $iddm, $content, $congthuc, $fileup);
}


function sanpham_delete($id)
{
    $sql = "DELETE FROM sanpham WHERE  id=?";
    pdo_execute($sql, $id);
}

function sanphamchitiet_select($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}

function get_chitietsp($idsp, $limi)
{
    $sql = "SELECT sanpham.*, danhmuc.tendm
            FROM sanpham
            LEFT JOIN danhmuc ON sanpham.iddm = danhmuc.id
            WHERE 1 ";

    if ($idsp > 0) {
        $sql .= "AND sanpham.id = " . $idsp;
    } else {
        $sql .= " ORDER BY sanpham.id DESC limit " . $limi;
        return pdo_query($sql);
    }

    return pdo_query($sql);
}

function update_sp($tensp, $preptime, $cooktime, $iddm, $fileup, $id, $content, $congthuc)
{
    if ($fileup != "") {
        $sql = 'UPDATE sanpham SET tensp=?, preptime=?, cooktime=?, iddm=?, fileup=?, content=?, congthuc=? WHERE id=?';
        pdo_execute($sql, $tensp, $preptime, $cooktime, $iddm, $fileup, $content, $congthuc, $id);
    } else {
        $sql = 'UPDATE sanpham SET tensp=?, preptime=?, cooktime=?, iddm=?, content=?, congthuc=? WHERE id=?';
        pdo_execute($sql, $tensp, $preptime, $cooktime, $iddm, $content, $congthuc, $id);
    }
}
//phân trang
function get_tongsanpham()
{
    $sql = "SELECT COUNT(id) FROM sanpham";
    return pdo_query_value($sql);
}

function get_sanphamtheotrang($start, $limi)
{
    $sql = "SELECT * FROM sanpham LIMIT " . $start . ", " . $limi;
    return pdo_query($sql);
}

function get_dssp($iddm, $limi, $start)
{
    $sql = "SELECT sanpham.*, danhmuc.tendm
            FROM sanpham
            LEFT JOIN danhmuc ON sanpham.iddm = danhmuc.id
            WHERE 1 ";

    if ($iddm > 0) {
        $sql .= "AND sanpham.iddm = " . $iddm;
    }
    $sql .= " ORDER BY sanpham.id DESC LIMIT " . $start . ", " . $limi;
    return pdo_query($sql);
}
