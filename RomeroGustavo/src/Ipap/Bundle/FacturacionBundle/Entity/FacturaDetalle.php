<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linea
 *
 * @ORM\Table(name="facturadetalle")
 * @ORM\Entity
 */
class FacturaDetalle
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
     * @ORM\Column(name="nroLinea", type="integer")
     */
    private $nroLinea;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;

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
     * Set nroLinea
     *
     * @param integer $nroLinea
     * @return Linea
     */
    public function setNroLinea($nroLinea)
    {
        $this->nroLinea = $nroLinea;

        return $this;
    }

    /**
     * Get nroLinea
     *
     * @return integer 
     */
    public function getNroLinea()
    {
        return $this->nroLinea;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Linea
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Linea
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}
