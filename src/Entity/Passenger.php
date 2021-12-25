<?php

namespace App\Entity;


use App\DTO\PassengerDTO;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PassengerRepository")
 */
class Passenger
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="passport_data", type="string")
     */

    private string $passportData;

    /**
     * @ORM\Column(name="fio_passenger", type="text")
     */
    private string $fio;

    public function __construct(string $passportData, string $fio)
    {
        $this->passportData = $passportData;
        $this->fio = $fio;
    }

    public static function createFromDTO(PassengerDTO $dto): self
    {
        return new self($dto->getPassportSeries() . ' ' . $dto->getPassportNumber(),
                        $dto->getSurname() . ' ' . $dto->getName() . ' ' . $dto->getPatronymic());
    }

//    public function updateFromDTO(PassengerDTO $dto): self
//    {
//        $this->setPassportData($dto->getPassportData());
//        $this->setFio($dto->getFio());
//    }

    public function getPassportData(): string
    {
        return $this->passportData;
    }

    public function setPassportData(string $passportData): void
    {
        $this->passportData = $passportData;
    }

    public function getFio(): string
    {
        return $this->fio;
    }

    public function setFio(string $fio): void
    {
        $this->fio = $fio;
    }




}