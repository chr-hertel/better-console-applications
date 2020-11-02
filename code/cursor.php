<?php

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CursorCommand extends Command
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $cursor = new Cursor($output);

        // argument for left/right is "number of columns" (1 by default)
        // argument for top/bottom is "number of rows" (1 by default)
        $cursor->moveUp(2)->moveRight();
        $cursor->moveDown();

        // move to an arbitrary (column, row) position
        $cursor->moveToPosition(7, 15);

        // you can show/hide the cursor, save/restore its position, etc.
        $cursor->savePosition()->hide();

        // cleaning output
        $cursor->clearLine();
        $cursor->clearLineAfter();
        $cursor->clearOutput();
        $cursor->clearScreen();
    }
}
