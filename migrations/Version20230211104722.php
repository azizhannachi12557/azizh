<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211104722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD roleut_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B369D7B1C4 FOREIGN KEY (roleut_id) REFERENCES roleutilisateur (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B369D7B1C4 ON utilisateur (roleut_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B369D7B1C4');
        $this->addSql('DROP INDEX IDX_1D1C63B369D7B1C4 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP roleut_id');
    }
}
