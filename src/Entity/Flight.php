<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlightRepository")
 */
class Flight
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="number_flight", type="integer")
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private ?int $number;

    /**
     * @ORM\Column(name="departure_from", type="text")
     */
    private string $departureFrom;

    /**
     * @ORM\Column(name="arrival_to", type="text")
     */
    private string $arrivalTo;

    /**
     * @ORM\Column(name="status", type="string", length="10", options={"default" : "активен"})
     */
    private string $status;

    /**
     * @ORM\Column(name="travel_time", type="string", length="10")
     */
    private string $travelTime;

    /**
     * @ORM\Column(name="base_price", type="integer")
     */
    private int $price;

    public function __construct(string $travelTime, int $price)
    {
        $this->travelTime = $travelTime;
        $this->price = $price;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function getDepartureFrom(): string
    {
        return $this->departureFrom;
    }

    public function setDepartureFrom(string $departureFrom): void
    {
        $this->departureFrom = $departureFrom;
    }

    public function getArrivalTo(): string
    {
        return $this->arrivalTo;
    }

    public function setArrivalTo(string $arrivalTo): void
    {
        $this->arrivalTo = $arrivalTo;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getTravelTime(): string
    {
        return $this->travelTime;
    }

    public function setTravelTime(string $travelTime): void
    {
        $this->travelTime = $travelTime;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }


}