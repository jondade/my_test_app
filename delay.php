<?php
  date_default_timezone_set('UTC');

  print "<html>\n\t<head>\n";
  print "<title>".__FILE__."</title>\n";
  print "\n</head>\n<body>\n";

  echo "<p>Time: ".date(DATE_RFC2822)."</p>\n";
  sleep((int)$_GET['time']);
  echo "<p>sleep complete ".date(DATE_RFC2822)."</p>\n";
  
  print "\n\t</body>\n</html>";
?>
