<?php
  
  function do_read(){
    print "{stuff:\"exists\"}";
  };

  function do_update(){

    print "{stuff:\"updated\"}";
  };

  function do_delete(){
    print "{stuff:\"gone\"}";
  };

  function do_create(){
    print "{stuff:\"new stuff\"}";
  };

  header("Content-type: application/json");

  $verb = $_SERVER['REQUEST_METHOD'];
  switch($verb){
    case "GET":
      // do stuff
      do_read();
      break;
    case "PUT":
      // do stuff
      do_delete();
      break;
    case "POST":
      // do stuff
      do_create();
      break;
    case "DELETE":
      // do stuff
      do_delete();
      break;
    default:
      // do stuff
      print "Unsupported method: ".$verb."\n";
      break;
  }
?>