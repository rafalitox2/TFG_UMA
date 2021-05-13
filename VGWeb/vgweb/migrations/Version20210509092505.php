<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210509092505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_product ADD product_id_id INT DEFAULT NULL, ADD category_id_id INT DEFAULT NULL, DROP product_id, DROP category_id');
        $this->addSql('ALTER TABLE category_product ADD CONSTRAINT FK_149244D3DE18E50B FOREIGN KEY (product_id_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE category_product ADD CONSTRAINT FK_149244D39777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_149244D3DE18E50B ON category_product (product_id_id)');
        $this->addSql('CREATE INDEX IDX_149244D39777D11E ON category_product (category_id_id)');
        $this->addSql('ALTER TABLE console_product ADD console_id_id INT DEFAULT NULL, ADD product_id_id INT DEFAULT NULL, DROP console_id, DROP product_id');
        $this->addSql('ALTER TABLE console_product ADD CONSTRAINT FK_253BEA1A60F9CB65 FOREIGN KEY (console_id_id) REFERENCES console (id)');
        $this->addSql('ALTER TABLE console_product ADD CONSTRAINT FK_253BEA1ADE18E50B FOREIGN KEY (product_id_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_253BEA1A60F9CB65 ON console_product (console_id_id)');
        $this->addSql('CREATE INDEX IDX_253BEA1ADE18E50B ON console_product (product_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_product DROP FOREIGN KEY FK_149244D3DE18E50B');
        $this->addSql('ALTER TABLE category_product DROP FOREIGN KEY FK_149244D39777D11E');
        $this->addSql('DROP INDEX IDX_149244D3DE18E50B ON category_product');
        $this->addSql('DROP INDEX IDX_149244D39777D11E ON category_product');
        $this->addSql('ALTER TABLE category_product ADD product_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ADD category_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, DROP product_id_id, DROP category_id_id');
        $this->addSql('ALTER TABLE console_product DROP FOREIGN KEY FK_253BEA1A60F9CB65');
        $this->addSql('ALTER TABLE console_product DROP FOREIGN KEY FK_253BEA1ADE18E50B');
        $this->addSql('DROP INDEX IDX_253BEA1A60F9CB65 ON console_product');
        $this->addSql('DROP INDEX IDX_253BEA1ADE18E50B ON console_product');
        $this->addSql('ALTER TABLE console_product ADD console_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, ADD product_id VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, DROP console_id_id, DROP product_id_id');
    }
}
