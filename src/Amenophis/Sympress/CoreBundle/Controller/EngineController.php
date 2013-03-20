<?php

namespace Amenophis\Sympress\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EngineController extends Controller
{
    /**
     * @Route("/")
     * @Template("AmenophisSympressThemeBundle::home.html.twig")
     */
    public function homeAction()
    {
        return array();
    }
}
