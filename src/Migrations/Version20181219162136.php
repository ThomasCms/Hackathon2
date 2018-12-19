<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181219162136 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bonbondex DROP FOREIGN KEY FK_adresse');
        $this->addSql('ALTER TABLE quantite DROP FOREIGN KEY FK_quantite_adresse');
        $this->addSql('ALTER TABLE bonbondex DROP FOREIGN KEY Fk_bonbon');
        $this->addSql('ALTER TABLE quantite DROP FOREIGN KEY PK_quantite_bonbon');
        $this->addSql('ALTER TABLE bonbon DROP FOREIGN KEY FK_bonbon_categorie');
        $this->addSql('ALTER TABLE bonbondex DROP FOREIGN KEY FK_joueur');
        $this->addSql('CREATE TABLE participants (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, entreprise VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, presence TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE bonbon');
        $this->addSql('DROP TABLE bonbondex');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE joueur');
        $this->addSql('DROP TABLE quantite');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, longitude DOUBLE PRECISION NOT NULL, latitude DOUBLE PRECISION NOT NULL, adresse VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, code_postal VARCHAR(5) NOT NULL COLLATE latin1_swedish_ci, ville VARCHAR(45) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bonbon (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, nom VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, image_url VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, code_barre VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, INDEX FK_bonbon_categorie (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bonbondex (id INT AUTO_INCREMENT NOT NULL, adresse_id INT NOT NULL, bonbon_id INT NOT NULL, joueur_id INT NOT NULL, quantité INT DEFAULT NULL, INDEX FK_adresse (adresse_id), INDEX FK_joueur (joueur_id), INDEX Fk_bonbon (bonbon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE joueur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE quantite (id INT AUTO_INCREMENT NOT NULL, adresse_id INT NOT NULL, bonbon_id INT NOT NULL, quantite INT NOT NULL, INDEX FK_quantite_adresse (adresse_id), INDEX PK_quantite_bonbon (bonbon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bonbon ADD CONSTRAINT FK_bonbon_categorie FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE bonbondex ADD CONSTRAINT FK_adresse FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE bonbondex ADD CONSTRAINT FK_joueur FOREIGN KEY (joueur_id) REFERENCES joueur (id)');
        $this->addSql('ALTER TABLE bonbondex ADD CONSTRAINT Fk_bonbon FOREIGN KEY (bonbon_id) REFERENCES bonbon (id)');
        $this->addSql('ALTER TABLE quantite ADD CONSTRAINT FK_quantite_adresse FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('ALTER TABLE quantite ADD CONSTRAINT PK_quantite_bonbon FOREIGN KEY (bonbon_id) REFERENCES bonbon (id)');
        $this->addSql('DROP TABLE participants');
    }
}
