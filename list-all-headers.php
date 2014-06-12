<html>
  <head>
    <title>Test App :: List all headers
    </title>
  </head>
  <body>
    <h2>List All Headers</h2>
    <?php
      foreach (getallheaders() as $name => $value) {
        echo "<p>$name: $value</p>\n";
      }
      echo "<p>$_SERVER[SERVER_NAME] $_SERVER[SERVER_ADDR]</p>\n";
    ?>
  </body>
</html>
