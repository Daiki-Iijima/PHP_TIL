<?php
declare(strict_types=1);

namespace MyFactory\Models\Test;

use MyFactory\Models\Interfase\BlogModelInterfase;

require_once dirname(__FILE__).'/../Interface/BlogModelInterfase.php';

class TestBlogModel implements BlogModelInterfase
{
  public function find(int $userId): void
  {
    echo "テスト:ID:{$userId}を持つブログ情報を取得しました",PHP_EOL;
  }
}
