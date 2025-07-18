<?php

include_once __DIR__ . "/Controllers/UserController.php";

use Controllers\UserController;

(new UserController())
    ->setId($_GET['id'])
    ->delete();

header('Location: index.php');

exit;