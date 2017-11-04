<?php

namespace HZ\raumReservierungBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservierung
 *
 * @ORM\Table(name="reservierung")
 * @ORM\Entity(repositoryClass="HZ\raumReservierungBundle\Repository\ReservierungRepository")
 */
class Reservierung
{

public function toArray() {
    $methods = get_class_methods('\HZ\raumReservierungBundle\Entity\Reservierung');
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
     * @var int
     *
     * @ORM\Column(name="raum", type="integer")
     */
    private $raum;


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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }





    /**
     * Set raum
     *
     * @param integer $raum
     *
     * @return Reservierung
     */
    public function setRaum($raum)
    {
        $this->raum = $raum;

        return $this;
    }

    /**
     * Get raum
     *
     * @return integer
     */
    public function getRaum()
    {
        return $this->raum;
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
}
