<?php
declare(strict_types=1);

namespace MyFactory\Models;

class FriendModel
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つユーザーの友達情報を取得しました",PHP_EOL;
  }
}
