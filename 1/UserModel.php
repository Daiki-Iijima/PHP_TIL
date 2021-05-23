<?php
declare(strict_types=1);

namespace MyFactory\Models;

class UserModel
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つユーザー情報を取得しました",PHP_EOL;
  }
}
