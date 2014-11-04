<?php
  
  function do_read(){

  };

  function do_update(){

  };

  function do_delete(){

  };

  function do_create(){

  };

  verb = $_SERVER['HTTP_X_METHOD'];

  switch(verb){
    case 'GET':
      // do stuff
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
      header("HTTP/1.1 501 Not Implemented");
      header("Cache-Control: private, no-store, no-cache");
      print "Unsupported method: ".$verb;."\n";
      break;
  }
