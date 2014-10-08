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
    use Behavior\ResultList;

    /**
     * @Route("/", name="radioneo_front_blog_home")
     * @Method({"GET"})
     * @Template()
     */
    public function indexAction()
    {
        $queryBuilder = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->getAllQueryBuilder()
        ;

        $pagination = $this->getPagination($queryBuilder);

        return ['pagination' => $pagination];
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
        $queryBuilder = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->getByCategory($category)
        ;

        $pagination = $this->getPagination($queryBuilder);

        return ['pagination' => $pagination];
    }

    /**
     * Block of latests posts
     *
     * @param integer $max Max number of posts
     *
     * @Route("/block/latest-posts", name="radioneo_front_block_latest_posts", requirements={"max": "\d+"})
     * @Method({"GET"})
     * @Template()
     */
    public function latestPostsAction($max = 3)
    {
        $queryBuilder = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Post')
            ->getAllQueryBuilder()
        ;

        $pagination = $this->getPagination($queryBuilder, $max);

        return ['pagination' => $pagination];
    }
}
