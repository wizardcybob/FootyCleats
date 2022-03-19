<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308162009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pseudo VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64986CC499D ON user (pseudo)');
        $this->addSql('DROP INDEX IDX_CD254338A2D8B41');
        $this->addSql('DROP INDEX IDX_CD254334827B9B2');
        $this->addSql('CREATE TEMPORARY TABLE __temp__cleat AS SELECT id, marque_id, terrain_id, name, prix, image1, image2, image3, image4 FROM cleat');
        $this->addSql('DROP TABLE cleat');
        $this->addSql('CREATE TABLE cleat (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, marque_id INTEGER NOT NULL, terrain_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, prix NUMERIC(6, 2) DEFAULT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, image4 VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_CD254334827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_CD254338A2D8B41 FOREIGN KEY (terrain_id) REFERENCES terrain (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO cleat (id, marque_id, terrain_id, name, prix, image1, image2, image3, image4) SELECT id, marque_id, terrain_id, name, prix, image1, image2, image3, image4 FROM __temp__cleat');
        $this->addSql('DROP TABLE __temp__cleat');
        $this->addSql('CREATE INDEX IDX_CD254338A2D8B41 ON cleat (terrain_id)');
        $this->addSql('CREATE INDEX IDX_CD254334827B9B2 ON cleat (marque_id)');
        $this->addSql('DROP INDEX IDX_E9BAF87C31BA576');
        $this->addSql('DROP INDEX IDX_E9BAF87F666B55D');
        $this->addSql('CREATE TEMPORARY TABLE __temp__cleat_couleur AS SELECT cleat_id, couleur_id FROM cleat_couleur');
        $this->addSql('DROP TABLE cleat_couleur');
        $this->addSql('CREATE TABLE cleat_couleur (cleat_id INTEGER NOT NULL, couleur_id INTEGER NOT NULL, PRIMARY KEY(cleat_id, couleur_id), CONSTRAINT FK_E9BAF87F666B55D FOREIGN KEY (cleat_id) REFERENCES cleat (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_E9BAF87C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO cleat_couleur (cleat_id, couleur_id) SELECT cleat_id, couleur_id FROM __temp__cleat_couleur');
        $this->addSql('DROP TABLE __temp__cleat_couleur');
        $this->addSql('CREATE INDEX IDX_E9BAF87C31BA576 ON cleat_couleur (couleur_id)');
        $this->addSql('CREATE INDEX IDX_E9BAF87F666B55D ON cleat_couleur (cleat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_CD254334827B9B2');
        $this->addSql('DROP INDEX IDX_CD254338A2D8B41');
        $this->addSql('CREATE TEMPORARY TABLE __temp__cleat AS SELECT id, marque_id, terrain_id, name, prix, image1, image2, image3, image4 FROM cleat');
        $this->addSql('DROP TABLE cleat');
        $this->addSql('CREATE TABLE cleat (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, marque_id INTEGER NOT NULL, terrain_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, prix NUMERIC(6, 2) DEFAULT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, image4 VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO cleat (id, marque_id, terrain_id, name, prix, image1, image2, image3, image4) SELECT id, marque_id, terrain_id, name, prix, image1, image2, image3, image4 FROM __temp__cleat');
        $this->addSql('DROP TABLE __temp__cleat');
        $this->addSql('CREATE INDEX IDX_CD254334827B9B2 ON cleat (marque_id)');
        $this->addSql('CREATE INDEX IDX_CD254338A2D8B41 ON cleat (terrain_id)');
        $this->addSql('DROP INDEX IDX_E9BAF87F666B55D');
        $this->addSql('DROP INDEX IDX_E9BAF87C31BA576');
        $this->addSql('CREATE TEMPORARY TABLE __temp__cleat_couleur AS SELECT cleat_id, couleur_id FROM cleat_couleur');
        $this->addSql('DROP TABLE cleat_couleur');
        $this->addSql('CREATE TABLE cleat_couleur (cleat_id INTEGER NOT NULL, couleur_id INTEGER NOT NULL, PRIMARY KEY(cleat_id, couleur_id))');
        $this->addSql('INSERT INTO cleat_couleur (cleat_id, couleur_id) SELECT cleat_id, couleur_id FROM __temp__cleat_couleur');
        $this->addSql('DROP TABLE __temp__cleat_couleur');
        $this->addSql('CREATE INDEX IDX_E9BAF87F666B55D ON cleat_couleur (cleat_id)');
        $this->addSql('CREATE INDEX IDX_E9BAF87C31BA576 ON cleat_couleur (couleur_id)');
    }
}
