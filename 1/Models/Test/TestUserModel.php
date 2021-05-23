<?php
declare(strict_types=1);

namespace MyFactory\Models\Test;

use MyFactory\Models\Interfase\UserModelInterfase;

require_once dirname(__FILE__).'/../Interface/UserModelInterfase.php';

class TestUserModel implements UserModelInterfase
{
  public function find(int $userId): void
  {
    echo "テスト:ID:{$userId}を持つユーザー情報を取得しました",PHP_EOL;
  }
}
