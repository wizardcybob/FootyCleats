<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308152428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cleat (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, marque_id INTEGER NOT NULL, terrain_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, prix NUMERIC(6, 2) DEFAULT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, image4 VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_CD254334827B9B2 ON cleat (marque_id)');
        $this->addSql('CREATE INDEX IDX_CD254338A2D8B41 ON cleat (terrain_id)');
        $this->addSql('CREATE TABLE cleat_couleur (cleat_id INTEGER NOT NULL, couleur_id INTEGER NOT NULL, PRIMARY KEY(cleat_id, couleur_id))');
        $this->addSql('CREATE INDEX IDX_E9BAF87F666B55D ON cleat_couleur (cleat_id)');
        $this->addSql('CREATE INDEX IDX_E9BAF87C31BA576 ON cleat_couleur (couleur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cleat');
        $this->addSql('DROP TABLE cleat_couleur');
    }
}
