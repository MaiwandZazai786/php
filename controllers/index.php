   <?php

   require 'Database.php';

   $title = "Users List";

   $db = new database();
   $users = $db->query('select * from users');

   require 'views/index.view.php';
