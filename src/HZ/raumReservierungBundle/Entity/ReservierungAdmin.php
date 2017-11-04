<?php

namespace HZ\raumReservierungBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservierungAdmin
 *
 * @ORM\Table(name="ReservierungAdmin")
 * @ORM\Entity(repositoryClass="HZ\raumReservierungBundle\Repository\ReservierungRepository")
 */
class ReservierungAdmin
{

public function toArray() {
    $methods = get_class_methods('\HZ\raumReservierungBundle\Entity\ReservierungAdmin');
    $data = [];
    foreach($methods as $method) {
      if(strpos($method, 'get') !== false) {
          $key = strtolower(str_replace('get','',$method));
          if($this->$method() instanceof \DateTime) {
            $data[$key] = $this->$method()->format('Y-m-d H:i:s');
          } else {
            $data[$key] = $this->$method();
          }

      }

        //$
    };
return $data;
  return [
    'id' => $this->id
  ];
}

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime")
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;




    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="className", type="string", length=255, nullable=true)
     */
    private $className;

    /**
       * @ORM\ManyToOne(targetEntity="HZ\raumReservierungBundle\Entity\Raum", cascade={"persist","remove"})
       * @ORM\JoinColumn(nullable=false)
       */
      private $raum;

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
     * Set title
     *
     * @param string $title
     *
     * @return Reservierung
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Reservierung
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Reservierung
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Reservierung
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set className
     *
     * @param string $className
     *
     * @return Reservierung
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set raum
     *
     * @param \HZ\raumReservierungBundle\Entity\Raum $raum
     *
     * @return ReservierungAdmin
     */
    public function setRaum(\HZ\raumReservierungBundle\Entity\Raum $raum)
    {
        $this->raum = $raum;

        return $this;
    }

    /**
     * Get raum
     *
     * @return \HZ\raumReservierungBundle\Entity\Raum
     */
    public function getRaum()
    {
        return $this->raum;
    }
}
