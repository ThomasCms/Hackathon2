<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181220101934 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE retour_event (id INT AUTO_INCREMENT NOT NULL, id_evenement INT NOT NULL, categorie_evenement VARCHAR(255) NOT NULL, date_evenement DATETIME NOT NULL, explication_evenement VARCHAR(255) NOT NULL, nbre_inscrits_evenement INT NOT NULL, presents_evenement INT NOT NULL, nbre_startup_evenement INT NOT NULL, nbre_partenaire_evenement INT NOT NULL, nbre_externes_evenement INT NOT NULL, nbre_pme_evenement INT NOT NULL, nbre_porteur_projet_evenement INT NOT NULL, resultat_evenement VARCHAR(255) NOT NULL, liens_formulaires_evenement VARCHAR(255) NOT NULL, suggestion_evenement VARCHAR(255) NOT NULL, taux_satisfaction_evenement INT NOT NULL, origine_participation_evenement VARCHAR(255) NOT NULL, nbre_mail_invitation_evenement INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, bilan LONGTEXT DEFAULT NULL, categorie_evenement VARCHAR(255) NOT NULL, date_evenement DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE evenements');
        $this->addSql('ALTER TABLE participants ADD event_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participants ADD CONSTRAINT FK_7169709271F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('CREATE INDEX IDX_7169709271F7E88B ON participants (event_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE participants DROP FOREIGN KEY FK_7169709271F7E88B');
        $this->addSql('CREATE TABLE evenements (id_evenement INT AUTO_INCREMENT NOT NULL, categorie_evenement VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, date_evenement VARCHAR(45) NOT NULL COLLATE latin1_swedish_ci, explication_evenement VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, nbre_inscrits_evenement INT NOT NULL, origine_participation_evenement VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, nbre_mail_invitation_evenement INT NOT NULL, presents_evenement INT NOT NULL, nbre_startup_evenement INT NOT NULL, nbre_partenaires_evenement INT NOT NULL, nbre_externes_evenement INT NOT NULL, nbre_pme__evenement INT NOT NULL, nbre_porteurprojet_evenement INT NOT NULL, resultat_evenement VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, lien_formulaire_evenement VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, taux_satisfaction_evenement INT NOT NULL, suggestion_evenement VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id_evenement)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE retour_event');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP INDEX IDX_7169709271F7E88B ON participants');
        $this->addSql('ALTER TABLE participants DROP event_id');
    }
}
