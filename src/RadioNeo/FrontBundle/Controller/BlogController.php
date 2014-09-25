<?php

namespace RadioNeo\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use RadioNeo\DatabaseBundle\Document\Post;
use RadioNeo\DatabaseBundle\Document\Category;

/**
 * @Route("/blog")
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="radioneo_front_blog_home")
     * @Template()
     */
    public function indexAction()
    {
        $posts = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->findAll()
        ;

        return array('posts' => $posts);
    }

    /**
     * @Route("/{year}/{month}/{day}/{slug}", name="radioneo_front_blog_show", requirements={"year" = "\d{4}", "month" = "\d{2}", "day" = "\d{2}"})
     * @Template()
     */
    public function showAction(Post $post)
    {
        return array('post' => $post);
    }
}