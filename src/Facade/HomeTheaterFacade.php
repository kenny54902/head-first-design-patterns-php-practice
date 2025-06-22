<?php

namespace Kenny\DesignPattern\Facade;

use Kenny\DesignPattern\Facade\Amplifier;

class HomeTheaterFacade
{
    private Amplifier $amp;

    private Tuner $tuner;

    private StreamingPlayer $player;

    private Projector $projector;

    private TheaterLight $light;

    private Screen $screen;

    private PopcornPopper $popcornPopper;

    public function __construct(
        Amplifier $amp,
        Tuner $tuner,
        StreamingPlayer $player,
        Projector $projector,
        TheaterLight $light,
        Screen $screen,
        PopcornPopper $popcornPopper
    ) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->player = $player;
        $this->projector = $projector;
        $this->light = $light;
        $this->screen = $screen;
        $this->tuner = $tuner;
        $this->popcornPopper = $popcornPopper;
    }

    public function watchMovie(string $movie)
    {
        $this->popcornPopper->on();
        $this->popcornPopper->pop();
        $this->light->on();
    }
}
