<?php

  date_default_timezone_set('UTC');
  if (! empty($_POST["Expires"])){
    header("Expires: ".$_POST["Expires"]);
  }
  if (! empty($_POST["Cache-Control"])){
    header("Cache-Control: ".$_POST["Cache-Control"]);
  }
  if (! empty($_POST["Surrogate-Control"])){
    header("Surrogate-Control: ".$_POST["Surrogate-Control"]);
  }

  print "<html>\n\t<head>\n";
  print "<title>".__FILE__."</title>\n";
  print "\n</head>\n<body>\n";

  print "<p>\n"
  foreach($_POST as $name => $value) {
    print "$name : $value<br>";
  }
  print "</p>\n"
  print "\n\t</body>\n</html>";
?>