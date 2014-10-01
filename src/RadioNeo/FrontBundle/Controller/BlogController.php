<?php

namespace RadioNeo\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use RadioNeo\DatabaseBundle\Document\Post;
use RadioNeo\DatabaseBundle\Document\Category;

/**
 * @Route("/blog")
 */
class BlogController extends Controller
{
    /**
     * @Route("/", name="radioneo_front_blog_home")
     * @Method({"GET"})
     * @Template()
     */
    public function indexAction()
    {
        $posts = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->findAll()
        ;

        return ['posts' => $posts];
    }

    /**
     * @Route("/categories", name="radioneo_front_blog_categories")
     * @Method({"GET"})
     *
     * @Template()
     */
    public function categoriesAction()
    {
        $categories = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Category')
            ->getParentCategories()
        ;

        return ['categories' => $categories];
    }

    /**
     * @Route(
     *     "/{year}/{month}/{day}/{slug}",
     *     name="radioneo_front_blog_show",
     *     requirements={
     *         "year"  = "\d{4}",
     *         "month" = "\d{2}",
     *         "day"   = "\d{2}"
     *     }
     * )
     * @Method({"GET"})
     * @Template()
     */
    public function showAction(Post $post)
    {
        return array('post' => $post);
    }

    /**
     * @Route("/{slug}", name="radioneo_front_blog_category")
     * @Method({"GET"})
     * @Template()
     */
    public function categoryPostsAction(Category $category)
    {
        $posts = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->getByCategory($category)
        ;

        return ['posts' => $posts];
    }
}
