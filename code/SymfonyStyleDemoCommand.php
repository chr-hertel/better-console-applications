<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SymfonyStyleDemoCommand extends Command
{
    protected static $defaultName = 'style';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Lorem Ipsum Dolor Sit Amet');
        $io->comment('Duis aute irure dolor in reprehenderit in voluptate velit esse collum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit');

        $io->table(['Name', 'Method', 'Scheme', 'Host', 'Path'], [
            ['admin_post_new', 'ANY', 'ANY', 'ANY', '/admin/post/new'],
            ['admin_post_show', 'GET', 'ANY', 'ANY', '/admin/post/{id}'],
            ['admin_post_edit', 'ANY', 'ANY', 'ANY', '/admin/post/{id}/edit'],
            ['admin_post_delete', 'DELETE', 'ANY', 'ANY', '/admin/post/{id}'],
        ]);

        $io->caution('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris.');
        $io->section('Consectetur Adispisicing Elit Sed Do Eiusmod');

        $io->listing([
            'Lorem Ipsum Dolor Sit Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
            'Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
            'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);

        // ask for user's input
        $io->ask('Bundle namespace');
        $io->ask('Bundle name', 'AcmeAppBundle');
        $io->confirm('Do you want to enable the bundle?');
        $io->choice('Configuration format', ['yaml', 'yml', 'php', 'annotation'], 'annotation');

        $io->note('Duis aute irure dolor in reprehenderit in voluptate velit esse collum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.');
        $io->success('Lorem Ipsum Dolor Sit Amet, consectetur adipiscing elit');
        $io->error('Duis aute irure dolor in reprehenderit in voluptate velit esse.');
        $io->warning('Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi.');

        return 0;
    }
}
