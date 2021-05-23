<?php

declare(strict_types=1);

require_once dirname(__FILE__).'/Controllers/BlogController.php';

$blogController = new \MyFactory\Controllers\BlogController();
$blog=$blogController->show(100,200);
