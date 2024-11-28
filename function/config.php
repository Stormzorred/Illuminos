<?php
    $connect = new mysqli("localhost", "root", "", "Illuminos");
    if(!$connect){
        echo "Ошибка базы данных: ".mysqli_connect_error();
    }
?>