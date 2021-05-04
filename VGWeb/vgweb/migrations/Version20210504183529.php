<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210504183529 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item CHANGE item_order item_order VARCHAR(255) DEFAULT NULL, CHANGE item_shoppingcart item_shoppingcart VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EF8354E50 FOREIGN KEY (item_product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_1F1B251EF8354E50 ON item (item_product_id)');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY product_FK');
        $this->addSql('ALTER TABLE shopping_cart DROP FOREIGN KEY shopping_cart_FK');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EF8354E50');
        $this->addSql('DROP INDEX IDX_1F1B251EF8354E50 ON item');
        $this->addSql('ALTER TABLE item CHANGE item_order item_order INT NOT NULL, CHANGE item_shoppingcart item_shoppingcart INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT product_FK FOREIGN KEY (id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE shopping_cart ADD CONSTRAINT shopping_cart_FK FOREIGN KEY (id) REFERENCES user (id)');
    }
}
