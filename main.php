<?php
declare(strict_types=1);

require_once dirname(__FILE__).'/MemoryGame.php';

$memoryGame = new MemoryGame("Animal");

if($memoryGame->isHit(10,25) === true){
  echo "HIT!",PHP_EOL;
}else{
  echo "NOT HIT!".PHP_EOL;
}
