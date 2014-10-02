<?php

namespace RadioNeo\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use RadioNeo\DatabaseBundle\Document\Artist;

/**
 * @Route("/artistes/biographies")
 */
class ArtistController extends Controller
{
    use Behavior\ResultList;

    /**
     * Default list of artists
     *
     * @Route(
     *     "/{letter}",
     *     name="radioneo_front_artist_home"),
     *     requirements={
     *         "letter" = ".?",
     *     }
     * @Method({"GET"})
     * @Template()
     */
    public function indexAction($letter = null)
    {
        $queryBuilder = $this
            ->get('doctrine_mongodb')
            ->getRepository('RadioNeoDatabaseBundle:Artist')
            ->getAllQueryBuilder($letter)
        ;

        $pagination = $this->getPagination($queryBuilder);

        return [
            'pagination' => $pagination,
            'letter'     => $letter,
        ];
    }

    /**
     * Show artist
     *
     * @Route("/biographie-{slug}", name="radioneo_front_artist_show")
     * @Method({"GET"})
     * @Template()
     */
    public function showAction(Artist $artist)
    {
        return array('artist' => $artist);
    }
}
