<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216205455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON comment');
        $this->addSql('ALTER TABLE comment CHANGE id id_comment INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD PRIMARY KEY (id_comment)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment MODIFY id_comment INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON comment');
        $this->addSql('ALTER TABLE comment CHANGE id_comment id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD PRIMARY KEY (id)');
    }
}
