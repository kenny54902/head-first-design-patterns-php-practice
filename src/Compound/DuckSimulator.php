<?php

namespace Kenny\DesignPattern\Compound;





class DuckSimulator
{
    private AbstractDuckFactory $duckFactory;

    public function __construct(AbstractDuckFactory $duckFactory)
    {
        $this->duckFactory = $duckFactory;
    }
    public function execute(): bool
    {
        $mallardDuck = $this->duckFactory->createMallardDuck();
        $redheadDuck = $this->duckFactory->createRedheadDuck();
        $duckCall = $this->duckFactory->createDuckCall();
        $rubberDuck = $this->duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());
        $this->simulate($mallardDuck);
        $this->simulate($redheadDuck);
        $this->simulate($duckCall);
        $this->simulate($rubberDuck);
        $this->simulate($gooseDuck);
        $quackCount = QuackCounter::getQuackCount();
        echo "\nQuackCount:$quackCount\n";

        $flock = new Flock();
        $flock->add($mallardDuck);
        $flock->add($redheadDuck);
        $flock->add($duckCall);
        $flock->add($rubberDuck);

        $flock->quack();

        $quackLogist = new QuackLogist();
        $flock->registerObserver($quackLogist);
        $flock->quack();
        return true;
    }
    private function simulate(QuackAble $duck)
    {
        $duck->quack();
    }
}
