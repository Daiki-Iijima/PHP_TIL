<?php

declare(strict_types=1);

namespace MyFactory;

//  使用するネームスペースの定義
use MyFactory\Models\Interfase\UserModelInterfase;
use MyFactory\Models\Interfase\FriendModelInterfase;
use MyFactory\Models\Interfase\BlogModelInterfase;

abstract class AbstractDatabaseFactory
{
  abstract public function createUserModel(): UserModelInterfase;

  abstract public function createFriendModel(): FriendModelInterfase;

  abstract public function createBlogModel(): BlogModelInterfase;
}
