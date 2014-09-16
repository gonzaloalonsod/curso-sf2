<?php

namespace Ipap\Bundle\FacturacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio")
 * @ORM\Entity
 */
class Domicilio
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoDomicilio", type="string", length=255)
     */
    private $tipoDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="manzana", type="string", length=25)
     */
    private $manzana;

    /**
     * @var string
     *
     * @ORM\Column(name="tira", type="string", length=25)
     */
    private $tira;

    /**
     * @var string
     *
     * @ORM\Column(name="uf_casa", type="string", length=25)
     */
    private $ufCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="parcela", type="string", length=25)
     */
    private $parcela;

    /**
     * @var string
     *
     * @ORM\Column(name="quinta", type="string", length=25)
     */
    private $quinta;

    /**
     * @var string
     *
     * @ORM\Column(name="edificio", type="string", length=255)
     */
    private $edificio;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=255)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10)
     */
    private $numero;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="pais", type="object")
     */
    private $pais;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="localidad", type="object")
     */
    private $localidad;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="barrio", type="object")
     */
    private $barrio;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="calle", type="object")
     */
    private $calle;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Domicilio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set tipoDomicilio
     *
     * @param string $tipoDomicilio
     * @return Domicilio
     */
    public function setTipoDomicilio($tipoDomicilio)
    {
        $this->tipoDomicilio = $tipoDomicilio;

        return $this;
    }

    /**
     * Get tipoDomicilio
     *
     * @return string 
     */
    public function getTipoDomicilio()
    {
        return $this->tipoDomicilio;
    }

    /**
     * Set manzana
     *
     * @param string $manzana
     * @return Domicilio
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;

        return $this;
    }

    /**
     * Get manzana
     *
     * @return string 
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set tira
     *
     * @param string $tira
     * @return Domicilio
     */
    public function setTira($tira)
    {
        $this->tira = $tira;

        return $this;
    }

    /**
     * Get tira
     *
     * @return string 
     */
    public function getTira()
    {
        return $this->tira;
    }

    /**
     * Set ufCasa
     *
     * @param string $ufCasa
     * @return Domicilio
     */
    public function setUfCasa($ufCasa)
    {
        $this->ufCasa = $ufCasa;

        return $this;
    }

    /**
     * Get ufCasa
     *
     * @return string 
     */
    public function getUfCasa()
    {
        return $this->ufCasa;
    }

    /**
     * Set parcela
     *
     * @param string $parcela
     * @return Domicilio
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;

        return $this;
    }

    /**
     * Get parcela
     *
     * @return string 
     */
    public function getParcela()
    {
        return $this->parcela;
    }

    /**
     * Set quinta
     *
     * @param string $quinta
     * @return Domicilio
     */
    public function setQuinta($quinta)
    {
        $this->quinta = $quinta;

        return $this;
    }

    /**
     * Get quinta
     *
     * @return string 
     */
    public function getQuinta()
    {
        return $this->quinta;
    }

    /**
     * Set edificio
     *
     * @param string $edificio
     * @return Domicilio
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;

        return $this;
    }

    /**
     * Get edificio
     *
     * @return string 
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Domicilio
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return Domicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Domicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set pais
     *
     * @param \stdClass $pais
     * @return Domicilio
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \stdClass 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set localidad
     *
     * @param \stdClass $localidad
     * @return Domicilio
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return \stdClass 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set barrio
     *
     * @param \stdClass $barrio
     * @return Domicilio
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return \stdClass 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set calle
     *
     * @param \stdClass $calle
     * @return Domicilio
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return \stdClass 
     */
    public function getCalle()
    {
        return $this->calle;
    }
}
