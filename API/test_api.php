<?php
  
  function do_read(){
    print "{stuff:\"complete\"}";
  };

  function do_update(){

  };

  function do_delete(){

  };

  function do_create(){

  };

  $verb = $_SERVER['HTTP_X_HTTP_METHOD'];

  print "Method: ".$verb."\n";

  switch($verb){
    case 'GET':
      // do stuff
      do_read();
      break;
    case 'PUT':
      // do stuff
      break;
    case 'POST':
      // do stuff
      break;
    case "DELETE":
      // do stuff
      break;
    default:
      // do stuff
      print "Unsupported method: ".$verb."\n";
      break;
  }
