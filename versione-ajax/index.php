<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../dist/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
  <script src="../dist/main.js" charset="utf-8"></script>
</head>
<body>
  <header></header>
  <main class="container">
  </main>

  <script id="card-template" type="text/x-handlebars-template">
    <div class="card">
      <img src="{{img-src}}">
      <p class="title">{{title}}</p>
      <p class="author">{{author}}</p>
      <p class="genre">{{genre}}</p>
      <p class="year">{{year}}</p>
    </div>
  </script>
  
</body>
</html>