<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Stoffel\Console\Canvas\Dimension;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Element\Image;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class PersonaSlide extends CanvasSlide
{
    protected function getElements(): array
    {
        return [
            [new Position(22, 15), new Image(dirname(__DIR__).'/images/christopher.png', new Dimension(60, 60))],
            [new Position(90, 17), new Headline('Christopher Hertel', Fill::withColor('white', '', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/doom.flf',
            ])],
            [new Position(90, 25), new Headline('Software Architect', Fill::withColor('#AAAAAA'), [
                'font' => dirname(__DIR__).'/fonts/small.flf',
            ])],
            [new Position(90, 30), new Headline('Quentic  Group', Fill::withGradient(['#6dc4b6', '#22766a']), [
                'font' => dirname(__DIR__).'/fonts/small.flf',
            ])],
            [new Position(90, 39), new Headline('@ el _ stoffel', Fill::withColor('#AAAAAA'), [
                'font' => dirname(__DIR__).'/fonts/small.flf',
            ])],
        ];
    }
}
