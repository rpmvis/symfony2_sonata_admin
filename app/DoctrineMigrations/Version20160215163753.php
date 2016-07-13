<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160215163753 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Wine CHANGE type type VARCHAR(30) NOT NULL, CHANGE name name VARCHAR(50) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F63ECB565E237E06 ON Wine (name)');
        $this->addSql('DROP INDEX UNIQ_955ED7C79123CD68 ON Winery');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_955ED7C75E237E06 ON Winery (name)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_F63ECB565E237E06 ON Wine');
        $this->addSql('ALTER TABLE Wine CHANGE type type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE name name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_955ED7C75E237E06 ON Winery');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_955ED7C79123CD68 ON Winery (fax)');
    }
}
