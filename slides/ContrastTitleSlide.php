<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide\CanvasSlide;
use Laminas\Text\Figlet\Figlet;
use Stoffel\Console\Canvas\Element\Headline;
use Stoffel\Console\Canvas\Fill;
use Stoffel\Console\Canvas\Position;

class ContrastTitleSlide extends CanvasSlide
{
    private string $title;
    private ?string $subtitle;
    private string $titleFont;
    private string $subtitleFont;

    public function __construct(
        string $title,
        string $subtitle = null,
        string $titleFont = null,
        string $subtitleFont = null
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->titleFont = $titleFont ?? dirname(__DIR__).'/fonts/Colossal.flf';
        $this->subtitleFont = $subtitleFont ?? dirname(__DIR__).'/fonts/Stick Letters.flf';
    }

    protected function getBackground(): ?Fill
    {
        return Fill::withColor('#FFFFFF');
    }

    protected function getElements(): array
    {
        $color = Fill::withColor('#000000', '#FFFFFF', ['bold']);

        if (null === $this->subtitle) {
            return [
                [new Position(0, 10), new Headline($this->title, $color, [
                    'font' => $this->titleFont,
                    'justification' => Figlet::JUSTIFICATION_CENTER,
                ])],
            ];
        }

        return [
            [new Position(0, 10), new Headline($this->title, $color, [
                'font' => $this->titleFont,
                'justification' => Figlet::JUSTIFICATION_CENTER,
            ])],
            [new Position(0, 25), new Headline($this->subtitle, $color, [
                'font' => $this->subtitleFont,
                'justification' => Figlet::JUSTIFICATION_CENTER,
            ])],
        ];
    }
}
