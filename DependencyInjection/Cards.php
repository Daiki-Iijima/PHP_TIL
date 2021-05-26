<?php
declare(strict_types=1);

//  カードインターフェース
interface Cards
{
  //  カードをシャッフルする
  public function shuffle():void;

  //  指定されたカードの位置の数字を返す
  public function getValue(int $position):string;
}
