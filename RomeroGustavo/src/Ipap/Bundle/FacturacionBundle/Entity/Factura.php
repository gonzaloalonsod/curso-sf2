<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Factura
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
     * @ORM\Column(name="nroFactura", type="integer")
     */
    private $nroFactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=2)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="condicionVenta", type="string", length=255)
     */
    private $condicionVenta;


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
     * Set nroFactura
     *
     * @param integer $nroFactura
     * @return Factura
     */
    public function setNroFactura($nroFactura)
    {
        $this->nroFactura = $nroFactura;

        return $this;
    }

    /**
     * Get nroFactura
     *
     * @return integer 
     */
    public function getNroFactura()
    {
        return $this->nroFactura;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Factura
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Factura
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set condicionVenta
     *
     * @param string $condicionVenta
     * @return Factura
     */
    public function setCondicionVenta($condicionVenta)
    {
        $this->condicionVenta = $condicionVenta;

        return $this;
    }

    /**
     * Get condicionVenta
     *
     * @return string 
     */
    public function getCondicionVenta()
    {
        return $this->condicionVenta;
    }
}
