   <?php

   require 'Database.php';

   $title = "Users List";

   $db = new database();
   $users = $db->query('select * from users')->fetchAll(PDO::FETCH_ASSOC);

   require 'views/index.view.php';
