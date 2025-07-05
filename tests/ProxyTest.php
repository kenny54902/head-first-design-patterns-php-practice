<?php

use Kenny\DesignPattern\Proxy\PermissionDenyException;
use Kenny\DesignPattern\Proxy\PersonImpl;
use Kenny\DesignPattern\Proxy\Proxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $person = new PersonImpl();
        $person->setGeekRating(10);
        $this->assertEquals(10, $person->getGeekRating());

        $proxy = new Proxy($person);
        try {
            $proxy->setGeekRating(10);
        } catch (Throwable $e) {
            $this->assertInstanceOf(PermissionDenyException::class, $e);
        }
    }
}