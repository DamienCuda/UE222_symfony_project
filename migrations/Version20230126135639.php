<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230126135639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__article AS SELECT id, category_id, title, content, img, published, date_publication FROM article');
        $this->addSql('DROP TABLE article');
        $this->addSql('CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, img CLOB DEFAULT NULL, published BOOLEAN DEFAULT NULL, date_publication CLOB DEFAULT NULL, CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO article (id, category_id, title, content, img, published, date_publication) SELECT id, category_id, title, content, img, published, date_publication FROM __temp__article');
        $this->addSql('DROP TABLE __temp__article');
        $this->addSql('CREATE INDEX IDX_23A0E6612469DE2 ON article (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__article AS SELECT id, category_id, title, content, img, published, date_publication FROM article');
        $this->addSql('DROP TABLE article');
        $this->addSql('CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category_id INTEGER NOT NULL, title VARCHAR(255) NOT NULL, content CLOB NOT NULL, img CLOB DEFAULT NULL, published BOOLEAN DEFAULT NULL, date_publication DATE DEFAULT NULL, CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO article (id, category_id, title, content, img, published, date_publication) SELECT id, category_id, title, content, img, published, date_publication FROM __temp__article');
        $this->addSql('DROP TABLE __temp__article');
        $this->addSql('CREATE INDEX IDX_23A0E6612469DE2 ON article (category_id)');
    }
}
