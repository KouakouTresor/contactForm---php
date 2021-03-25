<?php

  $db_host = 'localhost';
  $db_user = '****';
  $db_password = '****';
  $db_db = 'contactForm';
  $db_port = 8889;

  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($conn->connect_error) {
    die('Could not connect to the database!' . $conn->connect_error);
  }  
