<?php
declare(strict_types=1);

require_once dirname(__FILE__).'/MemoryGame.php';
require_once dirname(__FILE__).'/PlayingCards.php';
require_once dirname(__FILE__).'/AnimalCards.php';

//  メインルーチンでインスタンス化する

$cardType = 'Playing';

if($cardType === 'Animal'){
  $playingCards = new AnimalCards();
}elseif($cardType === 'Playing'){
  $playingCards = new PlayingCards();
}else{
  die('指定されたカードの種類は登録されていません。');
}

$memoryGame = new MemoryGame($playingCards);

if($memoryGame->isHit(10,25) === true){
  echo "HIT!",PHP_EOL;
}else{
  echo "NOT HIT!".PHP_EOL;
}
