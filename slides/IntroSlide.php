<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Image;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class IntroSlide extends CanvasSlide
{
    public function render(): void
    {
        parent::render();

        $this->getOutput()->write(PHP_EOL);
    }

    protected function getElements(): array
    {
        return [
            [new Position(10, 10), new Headline('Better Console', Fill::withGradient('instagram'), [
                'font' => dirname(__DIR__).'/fonts/3d.flf',
            ])],
            [new Position(10, 18), new Headline('Applications', Fill::withGradient('instagram'), [
                'font' => dirname(__DIR__).'/fonts/3d.flf',
            ])],
        ];
    }
}
