<?php
declare(strict_types=1);

require_once dirname(__FILE__).'/PlayingCards.php';
require_once dirname(__FILE__).'/AnimalCards.php';

class MemoryGame
{
  private $playingCards;

  public function __construct(Cards $cards)
  {
    //  依存性の注入
    $this->playingCards = $cards;

    $this->playingCards->shuffle();
  }

  public function isHit(int $position1, int $position2): bool
  {
    $position1Value = $this->playingCards->getValue($position1);
    echo "{$position1}枚目のカードは:{$position1Value}".PHP_EOL;

    $position2Value = $this->playingCards->getValue($position2);
    echo "{$position2}枚目のカードは:{$position2Value}",PHP_EOL;

    return $position1Value === $position2Value;
  }
}
