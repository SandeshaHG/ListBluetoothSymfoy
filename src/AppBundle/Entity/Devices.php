<?php 
namespace AppBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;  

/** 
   * @ORM\Entity 
   * @ORM\Table(name = "Devices") 
*/  
class Devices { 
   /** 
      * @ORM\Column(type = "integer") 
      * @ORM\Id 
      * @ORM\GeneratedValue(strategy = "AUTO") 
   */ 
   private $id;  
   
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
   private $name;  
    
   /** 
      * @ORM\Column(type = "string", length = 50) 
   */ 
      
   private $mac;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Devices
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
     * Set mac
     *
     * @param string $mac
     *
     * @return Devices
     */
    public function setMac($mac)
    {
        $this->mac = $mac;

        return $this;
    }

    /**
     * Get mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->mac;
    }
}
