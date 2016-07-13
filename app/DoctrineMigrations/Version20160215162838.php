<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160215162838 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Region (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, $map VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8CEF4405E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Wine (id INT AUTO_INCREMENT NOT NULL, winery_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, year INT NOT NULL, INDEX IDX_F63ECB5632FAE8E8 (winery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Winery (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, fax VARCHAR(20) DEFAULT NULL, phone VARCHAR(20) DEFAULT NULL, UNIQUE INDEX UNIQ_955ED7C79123CD68 (fax), INDEX IDX_955ED7C798260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Wine ADD CONSTRAINT FK_F63ECB5632FAE8E8 FOREIGN KEY (winery_id) REFERENCES Winery (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Winery ADD CONSTRAINT FK_955ED7C798260155 FOREIGN KEY (region_id) REFERENCES Region (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Winery DROP FOREIGN KEY FK_955ED7C798260155');
        $this->addSql('ALTER TABLE Wine DROP FOREIGN KEY FK_F63ECB5632FAE8E8');
        $this->addSql('DROP TABLE Region');
        $this->addSql('DROP TABLE Wine');
        $this->addSql('DROP TABLE Winery');
    }
}
