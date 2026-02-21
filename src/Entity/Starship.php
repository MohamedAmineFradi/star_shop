<?php

namespace App\Entity;

class Starship
{
    public function __construct(
    private int $id,
    private string $name,
    private string $class,
    private string $captin,
    private string $status,
    ){
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCaptin(): string
    {
        return $this->captin;
    }

    public function getStatus(): string
    {
        return $this->status;
    }


}
