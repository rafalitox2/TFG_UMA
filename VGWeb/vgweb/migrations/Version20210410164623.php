<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210410164623 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_product (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE console_product (id INT AUTO_INCREMENT NOT NULL, console_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item ADD item_order_id INT DEFAULT NULL, ADD item_shoppingcart_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EE192A5F3 FOREIGN KEY (item_order_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251ED298EB0C FOREIGN KEY (item_shoppingcart_id) REFERENCES shopping_cart (id)');
        $this->addSql('CREATE INDEX IDX_1F1B251EE192A5F3 ON item (item_order_id)');
        $this->addSql('CREATE INDEX IDX_1F1B251ED298EB0C ON item (item_shoppingcart_id)');
        $this->addSql('ALTER TABLE `order` ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_F5299398A76ED395 ON `order` (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_product');
        $this->addSql('DROP TABLE console_product');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EE192A5F3');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251ED298EB0C');
        $this->addSql('DROP INDEX IDX_1F1B251EE192A5F3 ON item');
        $this->addSql('DROP INDEX IDX_1F1B251ED298EB0C ON item');
        $this->addSql('ALTER TABLE item DROP item_order_id, DROP item_shoppingcart_id');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('DROP INDEX IDX_F5299398A76ED395 ON `order`');
        $this->addSql('ALTER TABLE `order` DROP user_id');
    }
}
