<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class StyleCommand extends Command
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // common output elements
        $io->title(string $message);
        $io->section(string $message);
        $io->text(string|array $message);
        $io->comment(string|array $message);

        // more advanced output elements
        $io->note(string|array $message);
        $io->caution(string|array $message);
        $io->listing(array $elements);
        $io->table(array $headers, array $rows);

        // ask for user's input
        $io->ask(string $question, string|null $default = null, callable|null $validator = null);
        $io->askHidden(string $question, callable|null $validator = null);
        $io->confirm(string $question, bool $default = true);
        $io->choice(string $question, array $choices, string|int|null $default = null);

        // display the result of the command or some important task
        $io->success(string|array $message);
        $io->error(string|array $message);
        $io->warning(string|array $message);
    }
}
