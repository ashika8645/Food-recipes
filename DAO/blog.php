
<?php
require_once 'pdo.php';
function get_all_blog()
{
    $sql = "SELECT * FROM posts ";
    return pdo_query($sql);
}
function get_left_blog($limi)
{
    $sql = "SELECT * FROM posts ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_blog_id($idblog, $limi)
{
    $sql = "SELECT * FROM posts WHERE 1 ";
    if ($idblog > 0) {
        $sql .= "AND id= " . $idblog;
    } else {
        $sql .= " ORDER BY id DESC limit " . $limi;
        return pdo_query($sql);
    }
    return pdo_query($sql);
}

function insert_post($title, $content, $fileup, $username, $user_image)
{
    $status = 'pending';
    $sql = "INSERT INTO posts(title, content, fileup, username, user_image,status) VALUES (?, ?, ?, ?, ?,?)";
    pdo_execute($sql, $title, $content, $fileup, $username, $user_image, $status);
}

function approve_post($id)
{
    $sql = "UPDATE posts SET status = 'approved' WHERE id = ?";
    pdo_execute($sql, $id);
}

function post_delete($id)
{
    $sql = "DELETE FROM posts WHERE  id=?";
    pdo_execute($sql, $id);
}

function get_pending_posts()
{
    $sql = "SELECT * FROM posts WHERE status = 'pending'";
    return pdo_query($sql);
}

function get_approved_posts()
{
    $sql = "SELECT * FROM posts WHERE status = 'approved'";
    return pdo_query($sql);
}

function get_tongpost(){
    $sql = "SELECT COUNT(id) FROM posts";
    return pdo_query_value($sql);
}
?>