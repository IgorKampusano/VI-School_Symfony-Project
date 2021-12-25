<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Airport
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="kod_airport", type="string", length="3")
     * @ORM\ManyToOne(targetEntity="Flight")
     * @ORM\JoinColumn(name="kod_airport", referencedColumnName="kod_airport")
     * @ORM\JoinColumn(name="city_airport", referencedColumnName="")
     */
    private string $kod;

    /**
     * @ORM\Column(name="city", type="string", length="30")
     */
    private string $city;

    public function __construct(string $kod, string $city)
    {
        $this->kod = $kod;
        $this->city = $city;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function setKod(string $kod): void
    {
        $this->kod = $kod;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}