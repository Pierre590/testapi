<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RideRepository")
 */
class Ride
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Schedule;

    /**
     * @ORM\Column(type="integer")
     */
    private $Space_available;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Observations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $User;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Arrival;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSchedule(): ?\DateTimeInterface
    {
        return $this->Schedule;
    }

    public function setSchedule(\DateTimeInterface $Schedule): self
    {
        $this->Schedule = $Schedule;

        return $this;
    }

    public function getSpaceAvailable(): ?int
    {
        return $this->Space_available;
    }

    public function setSpaceAvailable(int $Space_available): self
    {
        $this->Space_available = $Space_available;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->Observations;
    }

    public function setObservations(string $Observations): self
    {
        $this->Observations = $Observations;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->User;
    }

    public function setUser(string $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->Company;
    }

    public function setCompany(string $Company): self
    {
        $this->Company = $Company;

        return $this;
    }

    public function getDeparture(): ?string
    {
        return $this->Departure;
    }

    public function setDeparture(string $Departure): self
    {
        $this->Departure = $Departure;

        return $this;
    }

    public function getArrival(): ?string
    {
        return $this->Arrival;
    }

    public function setArrival(string $Arrival): self
    {
        $this->Arrival = $Arrival;

        return $this;
    }
}
