<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\SignalableCommandInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SignalCommand extends Command implements SignalableCommandInterface
{
    // ...

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // ...
    }

    public function getSubscribedSignals(): array
    {
        // return here any of the constants defined by PCNTL extension
        // https://www.php.net/manual/en/pcntl.constants.php
        return [SIGINT, SIGTERM];
    }

    public function handleSignal(int $signal): void
    {
        if (SIGINT === $signal) {
            // ...
        }

        // ...
    }
}
