<?php

namespace Kenny\DesignPattern\State;

use Kenny\DesignPattern\State\LotteryStrate;

class DefaultLotteryStrate implements LotteryStrate
{
    public function isWinner(): bool
    {
        return random_int(0, 10) === 1;
    }
}
