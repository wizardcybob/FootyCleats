<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cleat;
use App\Entity\Couleur;
use App\Entity\Terrain;
use App\Entity\Marque;

class GenerateCleatsCommand extends Command
{
    protected static $defaultName = 'app:generate-cleats'; // run command : php bin/console app:generate-cleats
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setDescription('Generate cleats with associated attributes');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Récupérer les marques existantes
        $marques = $this->entityManager->getRepository(Marque::class)->findAll();
        
        // Récupérer les terrains existants
        $terrains = $this->entityManager->getRepository(Terrain::class)->findAll();

        // Récupérer les couleurs existantes
        $colors = $this->entityManager->getRepository(Couleur::class)->findAll();

        // Créer des cleats avec leurs attributs associés
        for ($i = 1; $i <= 8; $i++) {
            $cleat = new Cleat();
            $cleat->setName("Cleat $i");
            $cleat->setPrix(rand(50, 300)); // Générer un prix aléatoire entre 50 et 300
            $cleat->setImage1('https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg');
            $cleat->setImage2('https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg');
            $cleat->setImage3('https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg');
            $cleat->setImage4('https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg');
            $cleat->setMarque($marques[$i % count($marques)]);
            $cleat->setTerrain($terrains[$i % count($terrains)]);
            $cleat->addCouleur($colors[$i % count($colors)]);
            $this->entityManager->persist($cleat);
        }

        $this->entityManager->flush();

        $output->writeln('Cleats generated successfully.');

        return Command::SUCCESS;
    }
}