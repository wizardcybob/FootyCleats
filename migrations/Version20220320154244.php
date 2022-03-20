<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220320154244 extends AbstractMigration
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
        $this->addSql('CREATE TABLE cleat_user (cleat_id INTEGER NOT NULL, user_id INTEGER NOT NULL, PRIMARY KEY(cleat_id, user_id))');
        $this->addSql('CREATE INDEX IDX_50E052A3F666B55D ON cleat_user (cleat_id)');
        $this->addSql('CREATE INDEX IDX_50E052A3A76ED395 ON cleat_user (user_id)');
        $this->addSql('CREATE TABLE couleur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE marque (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, client_id INTEGER DEFAULT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24CC0DF219EB6921 ON panier (client_id)');
        $this->addSql('CREATE TABLE panier_cleat (panier_id INTEGER NOT NULL, cleat_id INTEGER NOT NULL, PRIMARY KEY(panier_id, cleat_id))');
        $this->addSql('CREATE INDEX IDX_25FF7B8EF77D927C ON panier_cleat (panier_id)');
        $this->addSql('CREATE INDEX IDX_25FF7B8EF666B55D ON panier_cleat (cleat_id)');
        $this->addSql('CREATE TABLE terrain (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, panier_id INTEGER DEFAULT NULL, pseudo VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64986CC499D ON user (pseudo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F77D927C ON user (panier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cleat');
        $this->addSql('DROP TABLE cleat_couleur');
        $this->addSql('DROP TABLE cleat_user');
        $this->addSql('DROP TABLE couleur');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE panier_cleat');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('DROP TABLE user');
    }
}
