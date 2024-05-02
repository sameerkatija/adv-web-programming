<?php

include 'dbconnection.php';
// this pdo is definded in dbconnection file
$stmt = $pdo->prepare('select * from posts');
$stmt->execute();
$records = $stmt->fetchAll();
?>

<div>
    <h1>Shows posts from database</h1>
    <div>

        <p>Total Posts in Database: <?= count($records); ?></p>
        <button><a href="/createPost.php">Create Post</a></button>
    </div>
    <div>
        <h1>Posts:</h1>
        <?php foreach ($records as $record) : ?>
            <div style="border: 1px solid black; padding: 1em; margin: 1em; display: flex; justify-content: space-between; align-items:center;">
                <div>
                    <h3><?= $record['name'] ?></h3>
                    <p><?= $record['msg'] ?></p>
                </div>
                <div>
                    <button><a href="/updatePost.php?id=<?= $record['id'] ?>">Edit</a></button>
                    <button><a href="/deletePost.php?id=<?= $record['id'] ?>">Delete</a></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>