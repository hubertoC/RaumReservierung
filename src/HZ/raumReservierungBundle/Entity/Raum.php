<?php

namespace HZ\raumReservierungBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raum
 *
 * @ORM\Table(name="raum")
 * @ORM\Entity(repositoryClass="HZ\raumReservierungBundle\Repository\RaumRepository")
 */
class Raum
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
     * @ORM\Column(name="nummer", type="integer")
     */
    private $nummer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="frei", type="string")
     */
    private $frei;


    /**
     * @var int
     *
     * @ORM\Column(name="sitzplatze", type="integer")
     */
    private $sitzplatze;


    /**
     * @var int
     *
     * @ORM\Column(name="beamer", type="integer")
     */
    private $beamer;

    /**
     * @var int
     *
     * @ORM\Column(name="steckdose", type="integer")
     */
    private $steckdose;

    /**
     * @var int
     *
     * @ORM\Column(name="usbAnschluss", type="integer")
     */
    private $usbAnschluss;

    /**
     * @ORM\OneToOne(targetEntity="HZ\raumReservierungBundle\Entity\Image", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
     private $image;

    /**
       * @ORM\ManyToOne(targetEntity="HZ\raumReservierungBundle\Entity\Gebaeude")
       * @ORM\JoinColumn(nullable=false)
       */
      private $gebaeude;
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
     * Set nummer
     *
     * @param integer $nummer
     *
     * @return Raum
     */
    public function setNummer($nummer)
    {
        $this->nummer = $nummer;

        return $this;
    }

    /**
     * Get nummer
     *
     * @return int
     */
    public function getNummer()
    {
        return $this->nummer;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Raum
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservierung = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set gebaeude
     *
     * @param \HZ\raumReservierungBundle\Entity\Gebaeude $gebaeude
     *
     * @return Raum
     */
    public function setGebaeude(\HZ\raumReservierungBundle\Entity\Gebaeude $gebaeude)
    {
        $this->gebaeude = $gebaeude;

        return $this;
    }

    /**
     * Get gebaeude
     *
     * @return \HZ\raumReservierungBundle\Entity\Gebaeude
     */
    public function getGebaeude()
    {
        return $this->gebaeude;
    }

    

        public function setImage(\HZ\raumReservierungBundle\Entity\Image $image)
        {
            $this->image = $image;

            return $this;
        }

        /**
         * Get image
         *
         * @return \HZ\raumReservierungBundle\Entity\Image
         */
        public function getImage()
        {
            return $this->image;
        }




    /**
     * Set beamer
     *
     * @param integer $beamer
     *
     * @return Raum
     */
    public function setBeamer($beamer)
    {
        $this->beamer = $beamer;

        return $this;
    }

    /**
     * Get beamer
     *
     * @return integer
     */
    public function getBeamer()
    {
        return $this->beamer;
    }

    /**
     * Set steckdose
     *
     * @param integer $steckdose
     *
     * @return Raum
     */
    public function setSteckdose($steckdose)
    {
        $this->steckdose = $steckdose;

        return $this;
    }

    /**
     * Get steckdose
     *
     * @return integer
     */
    public function getSteckdose()
    {
        return $this->steckdose;
    }



    /**
     * Set sitzplätze
     *
     * @param integer $sitzplätze
     *
     * @return Raum
     */
    public function setSitzplätze($sitzplätze)
    {
        $this->sitzplätze = $sitzplätze;

        return $this;
    }

    /**
     * Get sitzplätze
     *
     * @return integer
     */
    public function getSitzplätze()
    {
        return $this->sitzplätze;
    }

    /**
     * Set usbAnschluss
     *
     * @param integer $usbAnschluss
     *
     * @return Raum
     */
    public function setUsbAnschluss($usbAnschluss)
    {
        $this->usbAnschluss = $usbAnschluss;

        return $this;
    }

    /**
     * Get usbAnschluss
     *
     * @return integer
     */
    public function getUsbAnschluss()
    {
        return $this->usbAnschluss;
    }

    /**
     * Set sitzplatze
     *
     * @param integer $sitzplatze
     *
     * @return Raum
     */
    public function setSitzplatze($sitzplatze)
    {
        $this->sitzplatze = $sitzplatze;

        return $this;
    }

    /**
     * Get sitzplatze
     *
     * @return integer
     */
    public function getSitzplatze()
    {
        return $this->sitzplatze;
    }

    /**
     * Set frei
     *
     * @param string $frei
     *
     * @return Raum
     */
    public function setFrei($frei)
    {
        $this->frei = $frei;

        return $this;
    }

    /**
     * Get frei
     *
     * @return string
     */
    public function getFrei()
    {
        return $this->frei;
    }
}
