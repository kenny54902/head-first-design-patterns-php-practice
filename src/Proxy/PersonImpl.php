<?php

namespace Kenny\DesignPattern\Proxy;

class PersonImpl implements Person
{
    private string $name;

    private string $gender;

    private string $interests;

    private int $rating = 0;

    private int $ratingCount = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getInterests(): string
    {
        return $this->interests;
    }

    public function getGeekRating(): int
    {
        return $this->rating;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setInterests($interests)
    {
        $this->interests = $interests;
    }

    public function setGeekRating($rating)
    {
        $this->rating += $rating;
        $this->ratingCount++;
    }
}