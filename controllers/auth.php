<?php
    session_start();

    include('../function/config.php');

    $sql = sprintf("SELECT * FROM `user` WHERE `login` = '%s' AND `password` = '%s'", $_POST['login'], $_POST['password']);

    $result = $connect->query($sql);

    if($result->num_rows){
        $row = $result->fetch_assoc();
        $sql = "SELECT `code` FROM `role` WHERE `id` = '{$row['id_role']}'";
        $role = $connect->query($sql)->fetch_assoc();

        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $role['code'];
        
        header("Location: ../index.php");
        exit;
    }else{
        header("Location: auth_page.php?valide_error=Некорректный email или пароль");
        exit;
    }
?>