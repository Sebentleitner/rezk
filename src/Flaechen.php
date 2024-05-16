<?php

namespace Sebentleitner\Rezk;

class Flaechen
{

    public array $flaechen = [];

    public function addFlaechen(Rechteck $rechteck)
    {
        $this->flaechen[] = $rechteck;
    }

    public function getFlaechen(): int
    {

        $flaechen = 0;

        foreach ($this->flaechen as $rechteck) {
            $flaechen += $rechteck->getFlaechen();
        }

        return $flaechen;
    }


}