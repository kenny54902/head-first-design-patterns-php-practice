<?php

namespace Kenny\DesignPattern\Proxy;

interface Person
{
    public function getName();

    public function setName($name);

    public function getGender();

    public function setGender($gender);

    public function getInterests();

    public function setInterests($interests);

    public function getGeekRating();

    public function setGeekRating($geekRating);
}