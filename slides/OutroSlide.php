<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Image;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class OutroSlide extends CanvasSlide
{
    private string $text;
    private string $gradient;

    public function __construct(string $text, string $gradient)
    {
        $this->text = $text;
        $this->gradient = $gradient;
    }

    protected function getElements(): array
    {
        return [
            [new Position(35, 15), new Headline($this->text, Fill::withGradient($this->gradient), [
                'font' => dirname(__DIR__).'/fonts/3d.flf',
            ])],
        ];
    }
}
