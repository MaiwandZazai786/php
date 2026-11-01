<?php

require 'Database.php';

$title = "Notes";

$config = require 'config.php';

$db = new database($config['database']);

$id = $_GET['id'];


$query = "select first_name, last_name, user_id, note from users inner join notes on users.id = notes.user_id where users.id = ?";

$notes = $db->query($query, [$id])->fetchAll(PDO::FETCH_ASSOC);

require 'views/notes.view.php';
