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
     * @Route("/post/new", name="radioneo_admin_blog_post_new")
     * @Template()
     */
    public function newPostAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(new PostType(), $post);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($post);
            $dm->flush();

            return $this->redirect($this->generateUrl('radioneo_admin_blog_post_new'));
        }

        return ['form' => $form->createView()];
    }
}
