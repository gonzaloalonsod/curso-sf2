<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
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
     * @var string
     *
     * @ORM\Column(name="nombreUsuario", type="string", length=200)
     */
    private $nombreUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasenaUsuario", type="string", length=20)
     */
    private $contrasenaUsuario;


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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     * @return Usuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string 
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set contrasenaUsuario
     *
     * @param string $contrasenaUsuario
     * @return Usuario
     */
    public function setContrasenaUsuario($contrasenaUsuario)
    {
        $this->contrasenaUsuario = $contrasenaUsuario;

        return $this;
    }

    /**
     * Get contrasenaUsuario
     *
     * @return string 
     */
    public function getContrasenaUsuario()
    {
        return $this->contrasenaUsuario;
    }
}
