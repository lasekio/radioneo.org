<?php

namespace RadioNeo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use RadioNeo\DatabaseBundle\Document\Post;
use RadioNeo\AdminBundle\Form\Type\PostType;

/**
 * @Route("/blog")
 */
class BlogController extends Controller
{
    /**
     * @Route("/post/new")
     * @Template()
     */
    public function newPostAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);

        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->redirect($this->generateUrl('task_success'));
        }

        return ['form' => $form->createView()];
    }
}
