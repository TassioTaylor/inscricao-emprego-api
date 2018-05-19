<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario30
 * Date: 12/05/2018
 * Time: 15:59
 */

namespace Infrastructure\Service;


class SerializerService
{
    /**
     * @var $serializer
     */
  private $serializer;

    /**
     * SerializerService constructor.
     * @param $serializer
     */
    public function __construct($serializer)
    {
        $this->serializer = $serializer;
    }
    public function converter($json, $tipo){
        try{
            return $this->serializer->deserialize($json,$tipo, 'json');
        }catch (\Exception $exception){
            dump($exception->getMessage());die;
        }
    }

}