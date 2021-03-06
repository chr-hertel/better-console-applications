<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Image;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class SymfonySlide extends CanvasSlide
{
    protected function getBackground(): ?Fill
    {
        return Fill::withColor('#FFFFFF');
    }

    protected function getElements(): array
    {
        return [
            [new Position(10, 12), new Image(dirname(__DIR__).'/images/symfony-logo.png', new Dimension(130, 50))],
        ];
    }
}
