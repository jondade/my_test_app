<?php

  date_default_timezone_set('UTC');
  if (! empty($_GET["Expires"])){
    $exp_date = gmdate('D, d M Y H:i:s GMT', time() + $_GET['Expires'])
    header("Expires: ".$exp_date);
  }
  if (! empty($_GET["Cache-Control"])){
    header("Cache-Control: ".$_GET["Cache-Control"]);
  }
  if (! empty($_GET["Surrogate-Control"])){
    header("Surrogate-Control: ".$_GET["Surrogate-Control"]);
  }

  print "<html>\n\t<head>\n";
  print "<title>".__FILE__."</title>\n";
  print "\n</head>\n<body>\n";

  print "<p>\n";
  foreach($_GET as $name => $value) {
    print "$name : $value<br>";
  }
  print "</p>\n";

  print "\n\t</body>\n</html>";
?>