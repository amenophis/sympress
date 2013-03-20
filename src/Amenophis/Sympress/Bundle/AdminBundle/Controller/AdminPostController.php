<?php

namespace Amenophis\Sympress\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Amenophis\Sympress\Bundle\AdminBundle\Form\AdminPostType;
use Amenophis\Sympress\Bundle\AdminBundle\Entity\Post;

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
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('AmenophisSympressCoreBundle:Post');

        $status = $this->getRequest()->query->get('status', Post::STATUS_EMPTY);
        $posts = $repo->findByStatus($status);

        return array(
            'status'        => $status,
            'all_count'     => $repo->getCountForStatus(Post::STATUS_EMPTY),
            'deleted_count' => $repo->getCountForStatus(Post::STATUS_DELETED),
            'posts'         => $posts
        );
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

    /**
     * @Route("/{id}/edit", name="sympress_adminpost_edit")
     * @Template()
     */
    public function editAction(Post $post)
    {
        $form = $this->createForm(new AdminPostType(), $post);

        return array(
            'form' => $form->createView()
        );
    }
}
