<?php
require_once 'pdo.php';

function comment_insert( $idsp,$comment,$username,$user_image)
{
    $sql = "INSERT INTO binhluan(idsp,comment,username,user_image) VALUES (?,?,?,?)";
    pdo_execute($sql,$idsp,$comment,$username,$user_image);
}

// function comment_update($ma_bl, $id, $idsp, $content, $date){
//     $sql = "UPDATE comment SET id=?,idsp=?,content=?,date=? WHERE ma_bl=?";
//     pdo_execute($sql, $id, $idsp, $content, $date, $ma_bl);
// }

// function comment_delete($ma_bl){
//     $sql = "DELETE FROM comment WHERE ma_bl=?";
//     if(is_array($ma_bl)){
//         foreach ($ma_bl as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_bl);
//     }
// }

function comment_select_all($limi)
{
    $sql = "SELECT * FROM binhluan ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}



// function comment_exist($ma_bl){
//     $sql = "SELECT count(*) FROM comment WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
//-------------------------------//

