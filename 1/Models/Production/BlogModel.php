<?php
declare(strict_types=1);

namespace MyFactory\Models;

use MyFactory\Models\Interfase\BlogModelInterfase;

require_once dirname(__FILE__).'/../Interface/BlogModelInterfase.php';

class BlogModel implements BlogModelInterfase
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つブログ情報を取得しました",PHP_EOL;
  }
}
