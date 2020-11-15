<?php

declare(strict_types=1);

use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleSignalEvent;

class SignalSubscriber implements EventSubscriberInterface
{
    // ...

    public function handleSignal(ConsoleSignalEvent $event): void
    {
        $signal = $event->getHandlingSignal();

        // ...
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::SIGNAL => 'handleSignal',
        ];
    }
}
