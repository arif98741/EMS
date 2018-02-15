<?php

require "db/Connection.php";
require "db/SelectQuery.php";



$query = new SelectQuery(Connection::create());

$results = $query->getData('td_employee');



// I can show them properly when i use this way.

// $pdo = Connection::create();

// $stmt = $pdo->query("SELECT * FROM td_employee");


require "index.view.php";
