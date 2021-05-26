<?php

declare(strict_types=1);

namespace MyFactory\Models\Interfase;

interface BlogModelInterfase
{
  //  ブログのの情報を取得する
  public function find(int $userId);
}
