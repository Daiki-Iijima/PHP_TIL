<?php

declare(strict_types=1);

namespace MyFactory;

require_once dirname(__FILE__).'/Models/UserModel.php';
require_once dirname(__FILE__).'/Models/FriendModel.php';
require_once dirname(__FILE__).'/Models/BlogModel.php';

class DatabaseModelFactory
{
  public function createUserModel(): \MyFactory\Models\UserModel
  {
    return new \MyFactory\Models\UserModel();
  }

  public function createFriendModel(): \MyFactory\Models\FriendModel
  {
    return new \MyFactory\Models\FriendModel();
  }

  public function createBlogModel(): \MyFactory\Models\BlogModel
  {
    return new \MyFactory\Models\BlogModel();
  }
}
