<?php

require "db/Connection.php";

$db = Connection::create();

$query = $db->prepare('select * from employee');

$query->execute();

$results = $query->fetchAll(PDO::FETCH_OBJ);

require "index.view.php";
