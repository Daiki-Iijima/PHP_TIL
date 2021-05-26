<?php

declare(strict_types=1);

use MyFactory\Controllers\BlogController;

require_once dirname(__FILE__).'/Controllers/BlogController.php';

$blogController = new BlogController(true);
$blog=$blogController->show(100,200);
