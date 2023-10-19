<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <?php
    require 'header.php';
    require 'functions.php';
    require 'cards.php';
    ?>
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="container">
        <img src="./photos/300Logo.png" alt="" width="75" height="75" />
        <nav>
        <ul>
        <?php 
        foreach($elements as $element){
            echo '<li>
            <a href="">'. $element['a'] . '</a>
          </li>';
        }
        ?>
        </ul>
        </nav>
      </div>
    </header>
    <!-- header end here -->
    <!-- sec-1 -->

    <section class="sec-1">
   <?php generateSection1("WHO ARE WE?", "We are a small starting business selling kitchen machinery."); ?>
   </section>
   <!-- sec-1 ends here -->
   
   <section class="sec-2">
    <h2>
      Our Products
    </h2>
    <div class="cards">
      <?php
      foreach($cards as $card){
        echo '
          <div class="card">
        <img src="'.$card['img'] .'" alt="">
        <h3>'.$card['title'] .'</h3>
        <p>'.$card['subtitle'] .'</p>
        <button>
          <a href="">'.$card['a'] .'</a>
        </button>

      </div>';
      }
      ?>
   
    </div>
   </section>

  </body>
</html>
