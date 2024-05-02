<?php

include 'dbconnection.php';
$stmt = $pdo->prepare('select * from posts where id=:id');
$stmt->execute(['id' => $_GET['id']]);
$record = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['submit'] === '') {
    $title = htmlspecialchars($_POST['name']) ?? '';
    $msg = htmlspecialchars($_POST['msg']) ?? '';
    $id = (int)$record['id'];
    if ($title && $msg) {
        $stmt1 = $pdo->prepare("UPDATE posts SET name = :name, msg = :msg WHERE id = :id");
        $stmt1->execute(['name' => $title, 'msg' => $msg, "id" => $id]);
        header("Location: index.php");
        echo 'impppp';
    }
}
// var_dump($record)
// header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="name">Title of the Post:</label>
        <input name="name" type="text" id='title' value="<?= $record['name'] ?>" />
        <br>
        <label>Post: </label>
        <br>
        <textarea id="post" name="msg" rows="4" cols="50"><?= $record['msg'] ?></textarea>
        <br>
        <button type="submit" name='submit'>Submit</button>
    </form>
</body>

</html>