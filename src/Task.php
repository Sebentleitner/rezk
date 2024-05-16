<?php

namespace Sebentleitner\Rezk;



class Task
{

    public string $name;

    public int $duaration;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    function __construct($name, $duaration)
    {
        $this->name = $name;
        $this->duaration = $duaration;

        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
        $log->warning('Foo');
        $log->error('Bar');

    }

    public function getDuaration(): int
    {
        $duaration = 0;

        foreach ($this->duaration as $duaration) {
            $duaration += $duaration;
        }

        return $duaration;
    }

    public function setDuaration(int $duaration): void
    {
        $this->duaration = $duaration;
    }


}