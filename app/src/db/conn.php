<?php

function connect() {
  $servername = getenv('DB_HOST');
  $username = getenv('DB_USER');
  $password = getenv('DB_PASS');
  $dbname = getenv('DB_NAME');

  return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}

?>
