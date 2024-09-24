<?php
require_once 'pdo.php';

function user_insert($username, $password, $email)
{
    $sql  = " INSERT INTO user (username, password, email) VALUES ( ?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function update_user($username, $password, $email, $role, $id, $user_image)
{
    try {
        if ($user_image != "") {
            $sql = "UPDATE user SET username=?, password=?, email=?, role=?, user_image=? WHERE id=?";
            return pdo_query_one($sql, $username, $password, $email, $role, $user_image, $id);
        } else {
            $sql = "UPDATE user SET username=?, password=?, email=?, role=? WHERE id=?";
            return pdo_query_one($sql, $username, $password, $email, $role, $id);
        }
    } catch (PDOException $e) {
        // In thông điệp lỗi
        echo "Error: " . $e->getMessage();
        return false; // hoặc thực hiện xử lý lỗi phù hợp
    }
}

function checkuser($username, $password)
{
    $sql = "SELECT * FROM user WHERE username=? and password=?";
    return pdo_query_one($sql, $username, $password);
}
function get_user_all()
{
    $sql = "SELECT * FROM user ";
    return pdo_query($sql);
}

function get_user()
{
    $sql = "SELECT * FROM user where role=0 ";
    return pdo_query($sql);
}

function user_delete($id)
{
    $sql = "DELETE FROM user WHERE  id=?";
    pdo_execute($sql, $id);
}

function get_tonguser()
{
    $sql = "SELECT COUNT(id) FROM user";
    return pdo_query_value($sql);
}

function get_approved_user()
{
    $sql = "SELECT * FROM user WHERE role = 1";
    return pdo_query($sql);
}
function approve_user($id)
{
    $sql = "UPDATE user SET role = 1 WHERE id = ?";
    pdo_execute($sql, $id);
}

function updatePassword($email, $password)
{
    $sql = "UPDATE user SET password=? WHERE email=?";
    pdo_execute($sql, $password, $email);
}
