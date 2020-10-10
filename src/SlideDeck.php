<?php

declare(strict_types=1);

namespace App;

use App\Slide\CanvasSlide;
use App\Slide\ImageSlide;
use App\Slide\TitleSlide;
use InvalidArgumentException;
use Symfony\Component\Console\Output\OutputInterface;

class SlideDeck
{
    /**
     * @var array<int, Slide>
     */
    private array $slides;

    public function __construct(OutputInterface $output)
    {
        $this->slides = [
            // Intro
            new TitleSlide($output, 'Better  Console'.PHP_EOL.'Applications', 'Christopher  Hertel'.PHP_EOL.'SymfonyWorld  2020'),
            // Content
            new TitleSlide($output, 'Image  Example'),
            new ImageSlide($output, '/home/christopher/Bilder/küste.jpg'),
            new TitleSlide($output, 'Canvas  Example'),
            new CanvasSlide($output),
            // Outro
            new TitleSlide($output, 'Thank  You'),
            new TitleSlide($output, 'Questions?'),
        ];
    }

    public function start(int $slideNumber = 0): bool
    {
        if (!array_key_exists($slideNumber, $this->slides)) {
            $message = 'Slide number %d does not exist, this deck has slides 0-%s';

            throw new InvalidArgumentException(sprintf($message, $slideNumber, count($this->slides)));
        }

        while (key($this->slides) !== $slideNumber) {
            next($this->slides);
        }

        $this->render();

        return true;
    }

    public function first(): bool
    {
        if ($result = reset($this->slides)) {
            $this->render();
        }

        return $result instanceof Slide;
    }

    public function previous(): bool
    {
        if ($result = prev($this->slides)) {
            $this->render();
        }

        return $result instanceof Slide;
    }

    public function last(): bool
    {
        if ($result = end($this->slides)) {
            $this->render();
        }

        return $result instanceof Slide;
    }

    public function next(): bool
    {
        if ($result = next($this->slides)) {
            $this->render();
        }

        return $result instanceof Slide;
    }

    private function render(): void
    {
        current($this->slides)->render();
    }
}
