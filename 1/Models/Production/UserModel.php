<?php
declare(strict_types=1);

namespace MyFactory\Models;

use MyFactory\Models\Interfase\UserModelInterfase;

require_once dirname(__FILE__).'/../Interface/UserModelInterfase.php';

class UserModel implements UserModelInterfase
{
  public function find(int $userId): void
  {
    echo "ID:{$userId}を持つユーザー情報を取得しました",PHP_EOL;
  }
}
