<?php

declare(strict_types=1);

require_once dirname(__FILE__).'/DatabaseModelFactory.php';

class BlogController
{
  private $modelFactory;
  private $user;
  private $blog;
  private $friend;

  public function __construct()
  {
    $this->modelFactory = new \MyFactory\DatabaseModelFactory();

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
