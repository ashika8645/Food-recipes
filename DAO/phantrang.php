<?php
require_once 'pdo.php';
function get_left_blog($limi)
{
    $sql = "SELECT * FROM posts ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}
?>