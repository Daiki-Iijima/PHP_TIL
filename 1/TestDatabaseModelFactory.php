<?php

declare(strict_types=1);

namespace MyFactory;

//  使用するネームスペースの定義
use MyFactory\Models\Interfase\UserModelInterfase;
use MyFactory\Models\Interfase\FriendModelInterfase;
use MyFactory\Models\Interfase\BlogModelInterfase;
use MyFactory\Models\Test\TestUserModel;
use MyFactory\Models\Test\TestFriendModel;
use MyFactory\Models\Test\TestBlogModel;

require_once dirname(__FILE__).'/AbstractDatabaseFactory.php';
require_once dirname(__FILE__).'/Models/Test/TestUserModel.php';
require_once dirname(__FILE__).'/Models/Test/TestFriendModel.php';
require_once dirname(__FILE__).'/Models/Test/TestBlogModel.php';

class TestDatabaseModelFactory extends AbstractDatabaseFactory
{
  public function createUserModel(): UserModelInterfase
  {
    return new TestUserModel();
  }

  public function createFriendModel(): FriendModelInterfase
  {
    return new TestFriendModel();
  }

  public function createBlogModel(): BlogModelInterfase
  {
    return new TestBlogModel();
  }
}
