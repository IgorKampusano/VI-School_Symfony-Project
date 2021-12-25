<?php

namespace App\DTO;

use App\Entity\Passenger;
use Symfony\Component\Validator\Constraints as Assert;

class PassengerDTO
{
    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=255)
     */
    private ?string $surname;

    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=10000)
     */
    private ?string $name;

    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=10000)
     */
    private ?string $patronymic;

    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=10000)
     */
    private ?string $passportSeries;

    /**
     * @Assert\NotBlank(message="Поле должно быть заполнено")
     * @Assert\Length(max=10000)
     */
    private ?string $passportNumber;

//    public static function createFromEntity(Passenger $passenger): self
//    {
//        $dto = new self();
//
//        $dto->setSurname($passenger->getTitle());
//        $dto->setName($passener->getMessage());
//
//        return $dto;
//    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    /**
     * @param string|null $patronymic
     */
    public function setPatronymic(?string $patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @return string|null
     */
    public function getPassportSeries(): ?string
    {
        return $this->passportSeries;
    }

    /**
     * @param string|null $passportSeries
     */
    public function setPassportSeries(?string $passportSeries): void
    {
        $this->passportSeries = $passportSeries;
    }

    /**
     * @return string|null
     */
    public function getPassportNumber(): ?string
    {
        return $this->passportNumber;
    }

    /**
     * @param string|null $passportNumber
     */
    public function setPassportNumber(?string $passportNumber): void
    {
        $this->passportNumber = $passportNumber;
    }


    public function getFio(): ?string
    {
        return $this->fio;
    }

    public function setFio(?string $fio): void
    {
        $this->fio = $fio;
    }

    public function getPassportData(): ?string
    {
        return $this->passportData;
    }

    public function setPassportData(?string $passportData): void
    {
        $this->passportData = $passportData;
    }

//    public static function createFromEntity(Passenger $passenger): self
//    {
//        $dto = new self();
//
//        $dto->setSurname($passenger->getFio());
//        $dto->setPassportData($passenger->getPassportData());
//
//        return $dto;
//    }
}