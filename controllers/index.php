   <?php

   require 'Database.php';

   $title = "Users List";

   $config = require 'config.php';

   $db = new database($config['database']);

   $id = $_GET['id'];

   $query = "select * from users where id = ?";

   $users = $db->query($query, [$id])->fetchAll(PDO::FETCH_ASSOC);

   require 'views/index.view.php';
