<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide;
use Symfony\Component\Console\Cursor;

class SnakeSlide extends Slide
{
    private const SNAKE = <<<EOT
                                                     ▄████████ ███▄▄▄▄      ▄████████    ▄█   ▄█▄    ▄████████
                                                    ███    ███ ███▀▀▀██▄   ███    ███   ███ ▄███▀   ███    ███
                                                    ███    █▀  ███   ███   ███    ███   ███▐██▀     ███    █▀ 
                                                    ███        ███   ███   ███    ███  ▄█████▀     ▄███▄▄▄    
                                                  ▀███████████ ███   ███ ▀███████████ ▀▀█████▄    ▀▀███▀▀▀    
                                                           ███ ███   ███   ███    ███   ███▐██▄     ███    █▄ 
                                                     ▄█    ███ ███   ███   ███    ███   ███ ▀███▄   ███    ███
                                                   ▄████████▀   ▀█   █▀    ███    █▀    ███   ▀█▀   ██████████
                                                           ▀
EOT;

    public function render(): void
    {
        $cursor = new Cursor($this->getOutput());
        $cursor->moveToPosition(0, 0);
        $cursor->moveDown(15);
        $this->getOutput()->write('<info>'.self::SNAKE.'</info>');
        $cursor->moveDown(7);
        $cursor->moveToColumn(50);
        $this->getOutput()->writeln('Check github.com/dbu/snake-bundle for details');
    }
}
