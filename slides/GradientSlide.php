<?php

declare(strict_types=1);

namespace Slides;

use jæm3l\CliNote\Slide;
use Stoffel\Console\Gradient\GradientHelper;

class GradientSlide extends Slide
{
    public function render(): void
    {
        $output = $this->getOutput();
        $title = base64_decode('ICAgICAgICAgICAgICAgICAgICAgICAgICAgXyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXyBfICAgICAgICAgICAgXyAgIAogIF9fXyBfX18gIF8gX18gIF9fXyAgX19fIHwgfCBfX18gICAgICAgIF9fIF8gXyBfXyBfXyBfICBfX3wgKF8pIF9fXyBfIF9fIHwgfF8gCiAvIF9fLyBfIFx8ICdfIFwvIF9ffC8gXyBcfCB8LyBfIFxfX19fXyAvIF9gIHwgJ19fLyBfYCB8LyBfYCB8IHwvIF8gXCAnXyBcfCBfX3wKfCAoX3wgKF8pIHwgfCB8IFxfXyBcIChfKSB8IHwgIF9fL19fX19ffCAoX3wgfCB8IHwgKF98IHwgKF98IHwgfCAgX18vIHwgfCB8IHxfIAogXF9fX1xfX18vfF98IHxffF9fXy9cX19fL3xffFxfX198ICAgICAgXF9fLCB8X3wgIFxfXyxffFxfXyxffF98XF9fX3xffCB8X3xcX198CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB8X19fLyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA=');

        GradientHelper::create($output)
            ->setText($title)
            ->setStyle('pastel')
            ->write();

        $output->write(PHP_EOL);
        foreach(['atlas', 'pastel', 'morning', 'cristal', 'rainbow'] as $gradient) {
            GradientHelper::create($output)
                ->setText('            Lorem ipsum dolor sit amet, consectetur adipiscing elit')
                ->setStyle($gradient)
                ->write();

            $output->write(PHP_EOL);
        }
        $output->write(PHP_EOL);

        $builtIn = [
            'cristal',
            'teen',
            'mind',
            'morning',
            'vice',
            'passion',
            'fruit',
            'instagram',
            'atlas',
            'retro',
            'summer',
            'pastel',
            'rainbow',
        ];

        $output->write(PHP_EOL);
        foreach($builtIn as $gradient) {
            $output->write('  '.str_pad($gradient, 12));

            GradientHelper::create($output)
                ->setText(str_repeat('■', 48))
                ->setStyle($gradient)
                ->write();
        }

        $output->write(PHP_EOL);
        $output->write(PHP_EOL);
        $output->write(PHP_EOL);
        $output->write(PHP_EOL);
    }
}
