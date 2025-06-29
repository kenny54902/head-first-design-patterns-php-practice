<?php

namespace Kenny\DesignPattern\Composite;


class Menu extends MenuComponent
{
    private array $menuComponents = [];

    private string $name;

    private string $desc;

    public function __construct(string $name, string $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function add(MenuComponent $menuComponent)
    {
        array_push($this->menuComponents, $menuComponent);
    }

    public function remove(MenuComponent $menuComponent)
    {
        foreach ($this->menuComponents as $index => $component) {
            if ($component === $menuComponent) {
                unset($this->menuComponents[$index]);
                $this->menuComponents = array_values($this->menuComponents);
                return;
            }
        }
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->desc;
    }

    public function print()
    {
        echo sprintf("%s:%s\n", $this->getName(), $this->getDescription());
        foreach ($this->menuComponents as $index => $component) {
            $component->print();
        }
    }
}
