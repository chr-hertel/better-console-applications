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
            [new Position(7, 9), new Image(dirname(__DIR__).'/images/christopher.png', new Dimension(50, 50))],
            [new Position(60, 9), new Headline('Christopher Hertel', Fill::withColor('#FFFFFF', '', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/Cybermedium.flf',
            ])],
            [new Position(60, 14), new Headline('Software Architect', Fill::withColor('#AAAAAA', '', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/Stick Letters.flf',
            ])],
            [new Position(60, 17), new Headline('Quentic  Group', Fill::withGradient(['#6dc4b6', '#22766a']), [
                'font' => dirname(__DIR__).'/fonts/Stick Letters.flf',
            ])],
            [new Position(60, 28), new Headline('@ el _ stoffel', Fill::withColor('#AAAAAA', '', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/Small.flf',
            ])],
        ];
    }
}
