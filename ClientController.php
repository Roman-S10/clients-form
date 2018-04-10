<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'test_db');

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if (isset($_POST['add'])) {
    $name  = $_POST['client-name'];
    $phone = $_POST['client-phone'];
    $email = $_POST['client-email'];
    $deleted = 0;

    $sql = "INSERT INTO clients(name, phone, email, deleted) VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($link,$sql);
    mysqli_stmt_bind_param($stmt,'sssi', $name, $phone, $email, $deleted);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($link);

    header('location: clients-list.php');
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $deleted = 1;

    $sql = "UPDATE clients SET deleted='$deleted' WHERE id = $id";
    mysqli_query($link, $sql);
    mysqli_close($link);
    header('location: clients-list.php');
}