<?php

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc"; //mới nhập đưa lên trên
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function   update_taikhoan($id, $role)
{
    $sql = "update taikhoan set role='" . $role . "' where id=" . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id=" . $id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
function get_role($n)
{
    switch ($n) {
        case '0':
            $tt = "Người dùng";
            break;
        case '1':
            $tt = "Admin";
            break;

        default:
            $tt = "Người dùng";
            break;
    }
    return $tt;
}

function   update_taikhoan2($id, $pass)
{
    $sql = "update taikhoan set pass='" . $pass . "'where id=" . $id;
    pdo_execute($sql);
}
