<?php

namespace FraisApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PdoGsb;
class FraisforfaitRestController extends Controller
{
    public function getLesFraisForfaitAction($idVisiteur, $mois)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesfrais = $pdo->getLesFraisForfait($idVisiteur, $mois);

        if(!$lesfrais)
        {
            throw new NotFoundHttpException('Mois non disponibles [idVisiteur='.$idVisiteur.']');
        }

        return new JsonResponse($lesfrais);
    }

    public function getLesIdFraisAction()
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesid = $pdo->getLesIdFrais();

        if (!$lesid) {
            throw new NotFoundHttpException('Id non disponibles');
        }

        return new JsonResponse($lesid);
    }

    public function majFraisForfaitAction(Request $request)
    {
        $pdo = PdoGsb::getPdoGsb();
        $idVisiteur = $request->request->get('idVisiteur');
        $mois = $request->request->get('mois');
        $lesFrais = $request->request->get('frais');

        $pdo->majFraisForfait($idVisiteur, $mois, $lesFrais);
        $response = new Response();
        $statusCode = 201;
        $response->setStatusCode($statusCode);
        return $response;
    }
}
