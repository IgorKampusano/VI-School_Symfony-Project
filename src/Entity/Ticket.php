<?php

namespace App\Entity;


use App\DTO\TicketDTO;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_ticket", type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(name="passenger_fio", type="text")
     * @ORM\ManyToOne(targetEntity="Passenger")
     * @ORM\JoinColumn(name="passenger_fio", referencedColumnName="passenger_passport_data")
     */
    private string $passengerFio;

    /**
     * @ORM\Column(name="date_departure", type="datetime")
     */
    private DateTime $dateDeparture;

    /**
     * @ORM\Column(name="price_ticket", type="integer")
     */
    private int $priceTicket;

    /**
     * @ORM\Column(name="status_booking", type="string", length="20", options={"default" : "забронирован"})
     */
    private string $statusBooking;

    public function __construct()
    {
        $this->dateDeparture = new DateTime();
    }

    public static function createFromDTO(TicketDTO $dto): self
    {
        return new self();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPassengerFio(): string
    {
        return $this->passengerFio;
    }

    public function setPassengerFio(string $passengerFio): void
    {
        $this->passengerFio = $passengerFio;
    }

    public function getDateDeparture(): DateTime
    {
        return $this->dateDeparture;
    }

    public function setDateDeparture(DateTime $dateDeparture): void
    {
        $this->dateDeparture = $dateDeparture;
    }

    public function getPriceTicket(): int
    {
        return $this->priceTicket;
    }

    public function setPriceTicket(int $priceTicket): void
    {
        $this->priceTicket = $priceTicket;
    }

    public function getStatusBooking(): string
    {
        return $this->statusBooking;
    }

    public function setStatusBooking(string $statusBooking): void
    {
        $this->statusBooking = $statusBooking;
    }
}