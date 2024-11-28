<?php
    session_start();

    include('../function/config.php');

    $sql = "SELECT `id`, `code` FROM `role` WHERE `code` = 'user'";
    $role = $connect->query($sql)->fetch_assoc();

    $sql = sprintf("INSERT INTO `user`(`id`, `id_role`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s')",
    $role['id'],
    $_POST['name'],
    $_POST['surname'],
    $_POST['patronymic'],
    $_POST['login'],
    $_POST['email'],
    $_POST['password']
    );

    if(!$connect -> query($sql)){
        echo "Ошибка добавления данных";
    }

    $_SESSION['id'] = $connect->insert_id;
    $_SESSION['role'] = $role['code'];

    header("Location: ../index.php");
    exit;
?>