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
    ?>
  </body>
</html>
