<?php

namespace RadioNeo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use RadioNeo\DatabaseBundle\Document\Artist;
use RadioNeo\AdminBundle\Form\Type\ArtistType;

/**
 * @Route("/artist")
 */
class ArtistController extends Controller
{
    /**
     * @Route("/new", name="radioneo_admin_artist_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request)
    {
        $artist = new Artist();
        $form = $this->createForm(new ArtistType(), $artist, array(
            'action' => $this->generateUrl($request->get('_route')),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($artist);
            $dm->flush();

            return $this->redirect($this->generateUrl('radioneo_admin_artist_post_new'));
        }

        return ['form' => $form->createView()];
    }
}
