<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Laminas\Text\Figlet\Figlet;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class SectionTitleSlide extends CanvasSlide
{
    private string $title;
    private string $titleFont;

    public function __construct(string $title, string $titleFont = null)
    {
        $this->title = $title;
        $this->titleFont = $titleFont ?? dirname(__DIR__).'/fonts/Colossal.flf';
    }

    protected function getBackground(): ?Fill
    {
        return Fill::withColor('#229409');
    }

    protected function getElements(): array
    {
        $color = Fill::withColor('#FFFFFF', '#229409', ['bold']);

        return [
            [new Position(10, 15), new Headline($this->title, $color, [
                'font' => $this->titleFont,
            ])],
        ];
    }
}
