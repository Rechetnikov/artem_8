<?php
    include_once __DIR__ . "/Controllers/UserController.php";

    use Controllers\UserController;

    echo (new UserController())
        ->setId($_GET['id'])
        ->view();