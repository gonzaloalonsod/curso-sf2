<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="nroDocumento", type="integer")
     */
    private $nroDocumento;
    
    /**
     *
     * @var type 
     * @ORM\Column(name="tipoDocumento", type="integer")
     */
    private $tipoDocumento;
    
    /**
     *
     * @var type 
     * @ORM\Column(name="apellidos", type="string")
     */
    private $apellidos;
    
    /**
     *
     * @var type 
     * @ORM\Column(name="nombres", type="string", length=100)
     */
    private $nombres;
    
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
     * Set nroDocumento
     *
     * @param integer $nroDocumento
     * @return Persona
     */
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

    /**
     * Get nroDocumento
     *
     * @return integer 
     */
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set tipoDocumento
     *
     * @param integer $tipoDocumento
     * @return Persona
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return integer 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Persona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Persona
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
        
        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }
}
