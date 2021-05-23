<?php

declare(strict_types=1);

require_once dirname(__FILE__).'/BlogController.php';

$blogController = new BlogController();
$blog=$blogController->show(100,200);
