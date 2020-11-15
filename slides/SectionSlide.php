<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Laminas\Text\Figlet\Figlet;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Rectangle;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class SectionSlide extends CanvasSlide
{
    protected function getBackground(): ?Fill
    {
        return Fill::withColor('#FFFFFF');
    }

    protected function getElements(): array
    {
        $color = Fill::withColor('#000000', '#FFFFFF', ['bold']);
        $options = ['font' => dirname(__DIR__) . '/fonts/Term.flf'];

        return [
            [new Position(20, 6), new Headline('$ bin/console app:billing:run 12-2020', $color, $options)],
            [new Position(20, 8), new Rectangle(new Dimension(100, 12), Fill::withColor('#c4c4c4'))],
            [new Position(60, 14), new Headline('Section Progress', Fill::withColor('#000000','#c4c4c4', ['bold']), $options)],
            [new Position(20, 21), new Rectangle(new Dimension(100, 12), Fill::withColor('#c4c4c4'))],
            [new Position(60, 26), new Headline('Section Errors', Fill::withColor('#000000','#c4c4c4', ['bold']), $options)],
        ];
    }
}
