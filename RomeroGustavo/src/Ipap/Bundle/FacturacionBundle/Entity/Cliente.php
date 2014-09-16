<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="nroCliente", type="integer")
     */
    private $nroCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoIva", type="string", length=50)
     */
    private $tipoIva;


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
     * Set nroCliente
     *
     * @param integer $nroCliente
     * @return Cliente
     */
    public function setNroCliente($nroCliente)
    {
        $this->nroCliente = $nroCliente;

        return $this;
    }

    /**
     * Get nroCliente
     *
     * @return integer 
     */
    public function getNroCliente()
    {
        return $this->nroCliente;
    }

    /**
     * Set tipoIva
     *
     * @param string $tipoIva
     * @return Cliente
     */
    public function setTipoIva($tipoIva)
    {
        $this->tipoIva = $tipoIva;

        return $this;
    }

    /**
     * Get tipoIva
     *
     * @return string 
     */
    public function getTipoIva()
    {
        return $this->tipoIva;
    }
}
