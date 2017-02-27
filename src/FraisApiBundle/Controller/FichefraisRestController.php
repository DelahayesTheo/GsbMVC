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

class FichefraisRestController extends FOSRestController
{
     /**
     * @ApiDoc(
      * resource=true, 
      * description="Get les mois disponibles pour un visiteur"
      * )
     */
    public function getLesmoisdisponiblesAction($idVisiteur)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
        
        if(!$lesMois)
        {
            throw new NotFoundHttpException('Mois non disponibles [idVisiteur='.$idVisiteur.']');
        }

        return new JsonResponse($lesMois);
    }

    /**
     * @ApiDoc(resource=true, description="Get les Justificatifs d'un client")
     */
    public function getNbjustificatifMoisAction($idVisiteur, $mois)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesJustificatifs = $pdo->getNbjustificatifs($idVisiteur,$mois);
        
        if(!$lesJustificatifs)
        {
            throw new NotFoundHttpException('Justficatif non disponible [idVisiteur='.$idVisiteur.']');
        }
        
        return new JsonResponse($lesJustificatifs);
    }
    
    /**
     * 
     * @ApiDoc(
     * resource=true,
     * description="Update le Nb de Justificatif"
     * )
     */
    public function putNbjustificatifsAction(Request $request)
    {
        $pdo = PdoGsb::getPdoGsb();
        $idVisiteur = $request->request->get('idVisiteur');
        $mois = $request->request->get('mois');
        $nbJustificatifs = $request->request->get('nbJustificatifs');
        $pdo->majNbJustificatifs($idVisiteur, $mois, $nbJustificatifs);
        
        $response = new Response();
        $statusCode = 200;
        $response->setStatusCode($statusCode);
        return $response;
    }
    
    /**
     * @ApiDoc(
     * resource=true,
     * description="Get Dernier Mois de Fiche"
     * )
     */
    public function getDerniermoissaisiAction($idVisiteur)
    {
        $pdo = PdoGsb::getPdoGsb();
        $dernierMois = $pdo->dernierMoisSaisi($idVisiteur);
        
        if(!$dernierMois)
        {
            throw new NotFoundHttpException('Justficatif non disponible [idVisiteur='.$idVisiteur.']');
        }
        
        return new JsonResponse($dernierMois);
    }
    
    /**
     * @ApiDoc(
     * resource=true,
     * description="Create une fiche de frais"
     * )
     */
    public function postNouvelleslignesfraisAction(Request $request)
    {
       $pdo = PdoGsb::getPdoGsb();
       $idVisiteur = $request->request->get('idVisiteur');
       $mois = $request->request->get('mois');
       $pdo->creeNouvellesLignesFrais($idVisiteur, $mois);
       
       $response = new Response();
       $statusCode = 201;
       $response->setStatusCode($statusCode);
       return $response;
    }
    
    /**
     * @ApiDoc(
     * resources=true,
     * description="Get les informations d'une fiche frais d'un mois pour un visiteur"
     * )
     */
    public function getLesinfosfichesfraisMoisAction($idVisiteur,$mois)
    {
        $pdo = PdoGsb::getPdoGsb();
        $InfosFiche = $pdo->getLesInfosFicheFrais($idVisiteur,$mois);
        
        if(!$InfosFiche)
        {
            throw new NotFoundHttpException('Justficatif non disponible [idVisiteur='.$idVisiteur.']');   
        }
        
        return new JsonResponse($InfosFiche);
    }
    
    /**
     * 
     * @ApiDoc(
     * resource=true,
     * description="Update l'état d'une fiche Frais"
     * )
     */
    public function putMajetatfichefraisAction($idVisiteur, $mois, $etat)
    {
        $pdo = PdoGsb::getPdoGsb();
        $idVisiteur = $request->request->get('idVisiteur');
        $mois = $request->request->get('mois');
        $etat = $request->request->get('etat');
        $pdo->majEtatFicheFrais($idVisiteur, $mois, $etat);
        
        $response = new Response();
        $statusCode = 200;
        $response->setStatusCode($statusCode);
        return $response;
    }
}
