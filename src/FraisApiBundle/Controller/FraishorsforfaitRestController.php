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

class FraishorsforfaitRestController extends Controller
{
    
     public function getLesfraishorsforfaitMoisAction($idVisiteur, $mois)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesfrais = $pdo->getLesFraisHorsForfait($idVisiteur, $mois);
        
        if(!$lesfrais)
        {
            throw new NotFoundHttpException('Mois non disponibles [idVisiteur='.$idVisiteur.']');
        }

        return new JsonResponse($lesfrais);
    }

    public function postNouveaufraishorsforfait (Request $request)
    {
        $pdo = PdoGsb::getPdoGsb();
        $idVisiteur = $request->request->get('idVisiteur');
        $mois = $request->request->get('mois');
        $libelle = $request->request->get('libelle');
        $date = $request->request->get('date');
        $montant = $request->request->get('montant');
        
        $pdo->creeNouveauFraisHorsForfait($idVisiteur, $mois, $libelle, $date, $montant);
        $response = new Response();
        $statusCode = 201;
        $response->setStatusCode($statusCode);
        return $response;
    }
    
     public function deleteFraisHorsForfait (Request $request)
     {
         $pdo = PdoGsb::getPdoGsb();
         $idFrais = $request->request->get('id');
          $pdo->supprimerFraisHorsForfait($idFrais);
          $response = new Response();
          $statusCode = 200;
         $response->setStatusCode($statusCode);
        return $response;
     }
    
}
