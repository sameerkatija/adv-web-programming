<?php
include 'dbconnection.php';


if ($_SERVER["REQUEST_METHOD"] === 'POST' && $_POST['submit'] === '') {

    $title = htmlspecialchars($_POST['name']) ?? '';
    $msg = htmlspecialchars($_POST['msg']) ?? '';
    if ($title && $msg) {
        $stmt = $pdo->prepare('INSERT INTO posts(name, msg) VALUES (:name, :msg);');
        $stmt->execute(['name' => $title, 'msg' => $msg]);
        header("Location: index.php");
    }
}
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
        <input name="name" type="text" id='title' />
        <br>
        <label>Post: </label>
        <br>
        <textarea id="post" name="msg" rows="4" cols="50"></textarea>
        <br>
        <button type="submit" name='submit'>Submit</button>
    </form>
</body>

</html>