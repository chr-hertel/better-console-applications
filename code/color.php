<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ColorCommand extends Command
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        // using a predefined style
        $output->writeln('<info>... contents ...</>');

        // custom style using basic colors
        $output->writeln('<fg=green;bg=blue>... contents ...</>');

        // custom style using true colors
        $output->writeln('<fg=#00ff00;bg=#00f>... contents ...</>');

        /** @var Symfony\Component\Console\Color $color */
        $color = new Color('#00ff00', '#00f');
        echo $color->apply('... contents ...');

        // you can mix basic and true colors
        $color = new Color('red', '#00f');

        // the third optional argument defines the styles
        $color = new Color('#000', '#fff', ['underscore', 'reverse']);
    }
}
