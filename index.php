<?php

require_once('connection.php');
$sql = "SELECT * FROM posts";
$posts = $conn->query($sql)->fetchAll();

//$print_r($posts);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">
    <section class="my-4">
      <a href="/" class="btn btn-primary">MAIN PAGE</a>
      <a href="create.html" class="btn btn-primary">CREATE POST</a>

    </section>
    <section class="row">
      <?php foreach($posts as $post): ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= $post['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $post['title'] ?></h5>
          <p class="card-text"><?= $post['description'] ?></p>
          <a href="show.php?id=<?= $post['id'] ?>" class="btn btn-primary">Show post</a>
        </div>
      </div>
      <?php endforeach; ?>

      <!-- <div class="card" style="width: 18rem;">
        <img src="car.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="show.html" class="btn btn-primary">Go somewhere</a>
        </div> -->
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>