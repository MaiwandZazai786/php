   <?php

   require 'Database.php';

   $title = "Users List";

   $config = require 'config.php';

   $db = new database($config);
   $users = $db->query('select * from users')->fetchAll(PDO::FETCH_ASSOC);

   require 'views/index.view.php';
