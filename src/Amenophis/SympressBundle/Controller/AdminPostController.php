<?php

namespace Amenophis\SympressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Amenophis\SympressBundle\Form\AdminPostType;

/**
 * @Route("/admin/post")
 */
class AdminPostController extends Controller
{
    /**
     * @Route("/", name="sympress_adminpost_list")
     * @Template()
     */
    public function listAction()
    {
        return array();
    }

    /**
     * @Route("/new", name="sympress_adminpost_new")
     * @Template()
     */
    public function newAction()
    {
        $form = $this->createForm(new AdminPostType());

        return array(
            'form' => $form->createView()
        );
    }
}
