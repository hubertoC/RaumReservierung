<?php

namespace HZ\raumReservierungBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfirmationPin
 *
 * @ORM\Table(name="confirmation_pin")
 * @ORM\Entity(repositoryClass="HZ\raumReservierungBundle\Repository\ConfirmationPinRepository")
 */
class ConfirmationPin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="pin", type="integer")
     */
    private $pin;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pin
     *
     * @param integer $pin
     *
     * @return ConfirmationPin
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return int
     */
    public function getPin()
    {
        return $this->pin;
    }
}
