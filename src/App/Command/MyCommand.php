<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class MyCommand
 *
 * @package App\Command
 */
class MyCommand extends Command
{
    /**
     * @return void
     */
    protected function configure(): void
    {
        $this->setName('my:command');
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('My awesome command!');
    }
}
