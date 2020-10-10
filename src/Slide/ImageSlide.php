<?php

declare(strict_types=1);

namespace App\Slide;

use App\Slide;
use Stoffel\Console\Image\ImageHelper;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Terminal;

class ImageSlide extends Slide
{
    private string $imagePath;

    public function __construct(OutputInterface $output, string $imagePath)
    {
        $this->imagePath = $imagePath;

        parent::__construct($output);
    }

    public function render(): void
    {
        $terminal = new Terminal();

        ImageHelper::create($this->getOutput())
            ->print($this->imagePath, $terminal->getWidth(), $terminal->getHeight() * 2);
    }
}
