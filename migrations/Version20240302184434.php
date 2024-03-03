<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302184434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar ADD background_color VARCHAR(7) NOT NULL, ADD text_color VARCHAR(7) NOT NULL, CHANGE start start VARCHAR(255) NOT NULL, CHANGE end end VARCHAR(255) NOT NULL, CHANGE all_day all_day VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE calendar DROP background_color, DROP text_color, CHANGE start start DATETIME NOT NULL, CHANGE end end DATETIME NOT NULL, CHANGE all_day all_day TINYINT(1) NOT NULL');
    }
}
