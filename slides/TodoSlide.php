<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Image;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class TodoSlide extends CanvasSlide
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    protected function getElements(): array
    {
        return [
            [new Position(50, 25), new Headline(sprintf('ToDo:  %s', $this->text), Fill::withColor('white', '', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/doom.flf',
            ])],
        ];
    }

    protected function getBackground(): ?Fill
    {
        return Fill::withColor('red');
    }
}
