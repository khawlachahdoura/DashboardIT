<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210810081210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('CREATE TABLE certificates (id INT AUTO_INCREMENT NOT NULL, domain_id INT DEFAULT NULL, projects LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', creation_date DATE NOT NULL, renewal_date DATE NOT NULL, renewal_mode VARCHAR(255) NOT NULL, owner VARCHAR(255) NOT NULL, issuer VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D26FB5F115F0EE5 (domain_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
