<?php
    session_start();
    include('../../function/config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/fundamentals.css">
    <title>UFAvia</title>
</head>
<body>
<div class="wrapper">
    <?php include '../../inc/header.php';?>
    <h1>Admin panel</h1>
    <nav>
        <ul>
            <li><a href="create_ticket.php">Add movie</a></li>
            <li><a href="../../tickets.php">List of movies</a></li>
        </ul>
    </nav>
</div>
</body>
</html>