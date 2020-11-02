<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SectionCommand extends Command
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $section = $output->section();
        $section->writeln('Downloading the file...');
        // ...
        $section->overwrite('Uncompressing the file...');
        // ...
        $section->overwrite('Copying the contents...');
        // ...


        $section = $output->section();
        $section->writeln('Welcome to the installation Process!');
        $section->writeln('Downloading the file...');
        $section->writeln('Uncompressing the file...');
        $section->writeln('Copying the contents...');
        // ...
        $section->clear(3);
        $section->writeln('The installation is complete!');
    }
}
