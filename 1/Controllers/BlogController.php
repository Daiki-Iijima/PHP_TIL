<?php

declare(strict_types=1);

namespace MyFactory\Controllers;

use MyFactory\DatabaseModelFactory;
use MyFactory\TestDatabaseModelFactory;

require_once dirname(__FILE__).'/../DatabaseModelFactory.php';
require_once dirname(__FILE__).'/../TestDatabaseModelFactory.php';

class BlogController
{
  private $modelFactory;
  private $user;
  private $blog;
  private $friend;

  public function __construct(bool $isTesting = false)
  {
    if($isTesting){
      $this->modelFactory = new TestDatabaseModelFactory();
    }else{
      $this->modelFactory = new DatabaseModelFactory();
    }

    $this->user = $this->modelFactory->createUserModel();
    $this->blog = $this->modelFactory->createBlogModel();
    $this->friend = $this->modelFactory->createFriendModel();
  }

  public function show(int $userId,int $blogId)
  {
    $this->user->find($userId);
    $this->friend->find($userId);

    $this->blog->find($blogId);
  }
}
