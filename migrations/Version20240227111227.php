<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227111227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064042D6BA2D9');
        $this->addSql('DROP INDEX IDX_CE6064042D6BA2D9 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP reclamation_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD reclamation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064042D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reponse (id)');
        $this->addSql('CREATE INDEX IDX_CE6064042D6BA2D9 ON reclamation (reclamation_id)');
    }
}
