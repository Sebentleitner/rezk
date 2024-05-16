<?php

namespace Sebentleitner\Rezk;

class Rechteck
{

    public int $a;

    public int $b;



    public function getFlaechen() : int{
        $fl = $this->b * $this->a;
        return $fl;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

}