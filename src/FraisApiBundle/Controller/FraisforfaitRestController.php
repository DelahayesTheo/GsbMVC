<?php

namespace FraisApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use PdoGsb;
class FraisforfaitRestController extends Controller
{
    public function getLesFraisForfait($idVisiteur, $mois)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesfrais = $pdo->getLesFraisForfait($idVisiteur, $mois);

        if(!$lesfrais)
        {
            throw new NotFoundHttpException('Mois non disponibles [idVisiteur='.$idVisiteur.']');
        }

        return new JsonResponse($lesfrais);
    }

    public function getLesIdFrais()
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesid = $pdo->getLesIdFrais();

        if (!lesid) {
            throw new NotFoundHttpException('Id non disponibles');
        }

        return new JsonResponse($lesid);
    }

    public function majFraisForfait($idVisiteur, $mois, $lesFrais)
    {
        $pdo = PdoGsb::getPdoGsb();
    }
}
