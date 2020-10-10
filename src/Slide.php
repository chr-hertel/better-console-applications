<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Output\OutputInterface;

abstract class Slide
{
    private OutputInterface $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    abstract public function render(): void;

    protected function getOutput(): OutputInterface
    {
        return $this->output;
    }
}
