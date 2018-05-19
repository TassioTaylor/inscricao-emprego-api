<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario30
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;




class Oportunidade
{
    /**
     * @var int
     */
    private $idOportunidade;
    /**
     * @var stringz
     */
    private $descricao;

    /**
     * @var \DateTime
     */
    private $periodoinical;
    /**
     * @var \DateTime
     */
    private $periodofinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DateTime $periodoinical
     * @param \DateTime $periodofinal
     */
    public function __construct($descricao, \DateTime $periodoinical, \DateTime $periodofinal)
    {
        $this->descricao = $descricao;
        $this->periodoinical = $periodoinical;
        $this->periodofinal = $periodofinal;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoinical()
    {
        return $this->periodoinical;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodofinal()
    {
        return $this->periodofinal;
    }

}