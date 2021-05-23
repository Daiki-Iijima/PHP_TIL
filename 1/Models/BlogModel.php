<?php
declare(strict_types=1);

namespace MyFactory\Models;

class BlogModel
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つブログ情報を取得しました",PHP_EOL;
  }
}
