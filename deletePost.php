<?php

require 'dbconnection.php';

$id = (int)$_GET['id'];
if ($id) {

    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
    $stmt->execute(['id' => $id]);
    header("Location: index.php");
}
