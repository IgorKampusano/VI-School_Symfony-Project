<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211225141548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE airport (kod_airport VARCHAR(3) NOT NULL, city VARCHAR(30) NOT NULL, PRIMARY KEY(kod_airport)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE flight (number_flight INT AUTO_INCREMENT NOT NULL, departure_from LONGTEXT NOT NULL, arrival_to LONGTEXT NOT NULL, status VARCHAR(10) DEFAULT \'активен\' NOT NULL, travel_time VARCHAR(10) NOT NULL, base_price INT NOT NULL, PRIMARY KEY(number_flight)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passenger (passport_data VARCHAR(255) NOT NULL, fio_passenger LONGTEXT NOT NULL, PRIMARY KEY(passport_data)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id_ticket INT AUTO_INCREMENT NOT NULL, passenger_fio LONGTEXT NOT NULL, date_departure DATETIME NOT NULL, price_ticket INT NOT NULL, status_booking VARCHAR(20) DEFAULT \'забронирован\' NOT NULL, PRIMARY KEY(id_ticket)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE flight');
        $this->addSql('DROP TABLE passenger');
        $this->addSql('DROP TABLE ticket');
    }
}
