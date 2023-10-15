<?php

require_once('connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM posts
        WHERE id = '$id'";
$post = $conn->query($sql)->fetch();

// print_r();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONE POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">
    <section class="my-4">
      <a href="/" class="btn btn-primary">MAIN PAGE</a>
      <a href="create.html" class="btn btn-primary">CREATE POST</a>
    </section>
    <section>
      <h1><?= $post['title'] ?></h1>
      <img src="<?= $post['image'] ?>" height="400" alt="">
      <p><?= $post['text'] ?></p>
      <a href="edit.php?id=<?= $post['id'] ?>" class="btn btn-warning">Edit Post</a>
      <button class="btn btn-danger" form="delete">Delete Post</button>
    </section>
    <form action="destroy.php" method="post" id="delete">
      <input type="hidden" name="id" value="<?= $post['id'] ?>">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>