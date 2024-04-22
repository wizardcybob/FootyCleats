<?php

// src/Command/DeleteColorsCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Couleur;

class DeleteColorsCommand extends Command
{
    protected static $defaultName = 'app:delete-colors'; // run the command : php bin/console app:delete-colors

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setDescription('Delete the last 10 colors from the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repository = $this->entityManager->getRepository(Couleur::class);
        $colors = $repository->findBy([], ['id' => 'DESC'], 10);

        foreach ($colors as $color) {
            $this->entityManager->remove($color);
        }

        $this->entityManager->flush();

        $output->writeln('Last 10 colors deleted successfully.');

        return Command::SUCCESS;
    }
}