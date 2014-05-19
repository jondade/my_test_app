<?php
	date_default_timezone_set('UTC');
    
    $exp_date = gmdate('D, d M Y H:i:s GMT', time() + 8640000);
    header("Expires: ".$exp_date);
    header("Cache-Control: max-age=1500, s-max-age=3000");
?>
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
