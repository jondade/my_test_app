<html>
  <head>
    <title>Delayed response test page</title>
  </head>
  <body>
    <?php
      date_default_timezone_set('UTC');
      echo "<p>Time:".date(DATE_RFC2822);
      sleep(5);
      echo "sleep complete".date(DATE_RFC2822);
      echo "</p>";
    ?>
  </body>
</html>
