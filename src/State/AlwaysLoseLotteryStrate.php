<?php

namespace Kenny\DesignPattern\State;

use Kenny\DesignPattern\State\LotteryStrate;

class AlwaysLoseLotteryStrate  implements LotteryStrate
{
    public function isWinner(): bool
    {
        return false;
    }
}
