<?php

namespace Kenny\DesignPattern\State;

use Kenny\DesignPattern\State\LotteryStrate;

class AlwaysWinLotteryStrate implements LotteryStrate
{
    public function isWinner(): bool
    {
        return true;
    }
}
