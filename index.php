<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>XS | Home</title>

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu"
    />
    <link rel="stylesheet" href="./CSS/global.css" />

    <style>
      * { font-family: sans-serif; }
      body { overflow: hidden; }
      .container { display: flex; justify-content: space-between; align-items: center; padding: 10px; }
      i#burguer { background-color: gray; cursor: pointer; }
      menu { display: none; cursor: pointer; }
      .botao { width: 100px; border-radius: 20px; height: 30px; background-color: rgba(41, 93, 128, 0.281); cursor: pointer; text-align: center; }
      .botao:hover { background-color: rgba(108, 132, 209, 0.5); }
      main { display: flex; padding: 20px; flex-direction: column; gap: 10px; align-items: center; }
      .createpost { background-color: rgba(82, 82, 82, 0.514); border-radius: 20px; padding: 10px; width: 90%; }
      textarea { width: 80%; height: 50px; font-size: 20px; border-radius: 20px; background-color: rgba(99, 99, 99, 0.623); }
      .tweetList { background-color: rgba(82, 82, 82, 0.514); border-radius: 20px; padding: 10px; width: 90%; }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo"><h1>XS</h1></div>
        <div class="search"><input class="Pesquisar" type="search" placeholder="Pesquisar" /></div>
        <div class="header">
          <span id="burguer" class="material-symbols-outlined" onClick="clickMenu()">menu</span>
          <menu id="itens">
            <ul class="nav-list">
              <li><a href="#">Home</a></li>
              <li><a href="./formulario.php">Login</a></li>
              <li><a href="./chat.html">Chat</a></li>
              <li><a href="#">Denuncias</a></li>
            </ul>
          </menu>
        </div>
      </div>
    </header>

    <main>
      <div class="createpost">
        <h5>Fazer um Post</h5>
        <form action="post.php" method="POST">
          <textarea name="content" id="twitterText" required></textarea>
          <input class="botao" type="submit" value="Tweet" />
        </form>
      </div>
    </main>

    <footer>
      <div class="tweetList">
        <h4>Últimos Posts</h4>
        <ul id="tweetList">
          <?php
          $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
          while ($row = $result->fetch_assoc()) {
              echo "<li><p>" . htmlspecialchars($row['content']) . "</p><small>" . $row['created_at'] . "</small></li>";
          }
          ?>
        </ul>
      </div>
    </footer>

    <script>
      function clickMenu() {
        var itens = document.getElementById("itens");
        itens.style.display = itens.style.display === "block" ? "none" : "block";
      }
    </script>

  </body>
</html>
