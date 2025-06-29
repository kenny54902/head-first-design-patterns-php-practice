<?php

use Kenny\DesignPattern\TemplateMethod\Coffee;
use Kenny\DesignPattern\TemplateMethod\Tea;
use PHPUnit\Framework\TestCase;

class CaffeineBeverageTest extends TestCase
{
    public function testCaffeineBeverage()
    {
        ob_start();
        $tea = new Tea();
        $tea->prepareRecipe();
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "Boiling water",
            "Pour into cup",
            "tea addCondiments\n",
        ]), $output);

        ob_start();
        $coffee = new Coffee();
        $coffee->prepareRecipe();
        $output = ob_get_clean();
        $this->assertEquals(implode("\n", [
            "Boiling water",
            "Pour into cup\n",
        ]), $output);
    }
}
