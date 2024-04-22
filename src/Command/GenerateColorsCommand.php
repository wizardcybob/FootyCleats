<?php

// src/Command/GenerateColorsCommand.php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Couleur;

class GenerateColorsCommand extends Command
{
    protected static $defaultName = 'app:generate-colors'; // run the command : php bin/console app:generate-colors
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setDescription('Generate 10 different colors in the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Confirmation question
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('This will generate 10 different colors in the database. Do you want to continue? (yes/no) ', false);

        if (!$helper->ask($input, $output, $question)) {
            $output->writeln('Operation cancelled.');
            return Command::SUCCESS;
        }

        $colors = ['Blanc', 'Noir', 'Rouge', 'Bleu', 'Vert', 'Jaune', 'Orange', 'Violet', 'Rose', 'Marron'];

        foreach ($colors as $colorName) {
            // Check if the color already exists
            $existingColor = $this->entityManager->getRepository(Couleur::class)->findOneBy(['name' => $colorName]);
            
            if (!$existingColor) {
                $color = new Couleur();
                $color->setName($colorName);
                $this->entityManager->persist($color);
            }
        }

        $this->entityManager->flush();

        $output->writeln('Colors generated successfully.');

        return Command::SUCCESS;
    }
}
