<?php

declare(strict_types=1);

namespace MyFactory;

//  使用するネームスペースの定義
use MyFactory\Models\Interfase\UserModelInterfase;
use MyFactory\Models\Interfase\FriendModelInterfase;
use MyFactory\Models\Interfase\BlogModelInterfase;
use MyFactory\Models\UserModel;
use MyFactory\Models\FriendModel;
use MyFactory\Models\BlogModel;

require_once dirname(__FILE__).'/AbstractDatabaseFactory.php';
require_once dirname(__FILE__).'/Models/Production/UserModel.php';
require_once dirname(__FILE__).'/Models/Production/FriendModel.php';
require_once dirname(__FILE__).'/Models/Production/BlogModel.php';

class DatabaseModelFactory extends AbstractDatabaseFactory
{
  public function createUserModel(): UserModelInterfase
  {
    return new UserModel();
  }

  public function createFriendModel(): FriendModelInterfase
  {
    return new FriendModel();
  }

  public function createBlogModel(): BlogModelInterfase
  {
    return new BlogModel();
  }
}
