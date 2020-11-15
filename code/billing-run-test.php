<?php

declare(strict_types = 1);

namespace App\Tests\Command;

use App\Command\BillingRunCommand;
use App\Entity\Customer;
use App\Entity\Invoice;
use App\Invoice\Exporter;
use App\Invoice\Mailer;
use App\Payment\Provider;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Nelmio\Alice\FileLoaderInterface;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Mailer\EventListener\MessageLoggerListener;

class BillingRunCommandTest extends KernelTestCase
{
    private CommandTester $commandTester;
    private EntityManagerInterface $entityManager;
    private int $activeCustomers;

    public function testBillingRun(): void
    {
        $this->commandTester->execute([
            'command'  => 'app:billing:run',
            'period' => '12-2018',
        ]);

        $this->assertBillingRunExitedCorrectly();
        $this->assertInvoicesGotCreated();
        $this->assertExportGotCreated();
        $this->assertPdfsGotCreated();
        $this->assertInvoicesGotMailed();
    }

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);

        $command = $application->find('app:billing:run');
        $this->commandTester = new CommandTester($command);

        $fileLoader = $kernel->getContainer()->get('test.'.FileLoaderInterface::class);
        $this->entityManager = $kernel->getContainer()->get('test.'.EntityManagerInterface::class);

        // see github.com/chr-hertel/console-example for more
    }
}
