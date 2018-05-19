<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario30
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;


use Domain\Model\Oportunidade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class OportunidadeController extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction(Request $request){
        $SerializerService = $this->get('infra.serializer.service');

        try {
            $oportunidade = $SerializerService->converter($request->getContent(), Oportunidade::class);
            dump($oportunidade); die;
        } catch (\Exception $exception) {
            dump($exception->getMessage()); die;

        }




    }
}