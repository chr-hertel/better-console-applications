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

class BashTitleSlide extends CanvasSlide
{
    private string $title;
    private string $bash;

    public function __construct(string $title, string $bash)
    {
        $this->title = $title;
        $this->bash = $bash;
    }

    protected function getBackground(): ?Fill
    {
        return Fill::withColor('#FFFFFF');
    }

    protected function getElements(): array
    {
        return [
            [new Position(0, 8), new Headline($this->title, Fill::withColor('#000000', '#FFFFFF', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/Colossal.flf',
                'justification' => Figlet::JUSTIFICATION_CENTER,
            ])],
            [new Position(45, 24), new Rectangle(new Dimension(60, 3), Fill::withColor('#000000'))],
            [new Position(47, 25), new Headline($this->bash, Fill::withColor('#FFFFFF', '#000000', ['bold']), [
                'font' => dirname(__DIR__).'/fonts/Term.flf',
            ])],
        ];
    }
}
