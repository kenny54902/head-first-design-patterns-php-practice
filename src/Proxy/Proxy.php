<?php

namespace Kenny\DesignPattern\Proxy;

use RuntimeException;

class Proxy implements Person
{

    private Person $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }
    public function getName(): string
    {
        return $this->person->getName();
    }

    public function getGender(): string
    {
        return $this->person->getGender();
    }

    public function getInterests(): string
    {
        return $this->person->getInterests();
    }

    public function getGeekRating(): int
    {
        return $this->person->getGeekRating();
    }

    public function setName($name)
    {
        $this->person->setName($name);
    }

    public function setGender($gender)
    {
        $this->person->setGender($gender);
    }

    public function setInterests($interests)
    {
        $this->person->setInterests($interests);
    }

    public function setGeekRating($rating)
    {
        throw new PermissionDenyException("permission deny");
    }
}