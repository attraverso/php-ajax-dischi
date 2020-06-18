<?php include 'partials/records_list.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../dist/style.css">
</head>
<body>
  <header></header>
  <main class="container">
    <?php foreach ($records as $key => $value) {?>
      <div class="card">
        <img src="<?php echo $value['poster']?>" alt="">
        <p class="title"><?php echo $value['title']; ?></p>
        <p class="author"><?php echo $value['author']; ?></p>
        <p class="genre"><?php echo $value['genre']; ?></p>
        <p class="year"><?php echo $value['year']; ?></p>
      </div>
    <?php
    }?>
  </main>
</body>
</html>
