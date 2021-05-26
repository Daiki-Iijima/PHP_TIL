<?php
declare(strict_types=1);

namespace MyFactory\Models;

use MyFactory\Models\Interfase\FriendModelInterfase;

require_once dirname(__FILE__).'/../Interface/FriendModelInterfase.php';

class FriendModel implements FriendModelInterfase
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つユーザーの友達情報を取得しました",PHP_EOL;
  }
}
