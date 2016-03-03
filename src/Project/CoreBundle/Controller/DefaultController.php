<?php

namespace Project\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('ProjectCoreBundle:Default:index.html.twig');
    }

    public function postAction(Request $request)
    {
        /**
         * Handling post request with html hardcoded parameters
         */
        $post = $_POST["id"]; # V1 Handle post!

        $post = $request->request->get('id'); # V2 Handle post !

        echo "Hardcoded inputs are handled with : POST:  $post";

        die; # Die dude die!
    }

    public function getAction(Request $request)
    {
        /**
         * Handling get request with html hardcoded parameters
         */
        $get = $_GET["id"]; # V1 Handle get!
        $get = $request->query->get('id'); # V2 Handle get!
        $get = $request->query->getInt('id'); #V3 Handle get!

        echo "Hardcoded inputs are handled with : GET:   $get ";

        die; # Die dude die!
    }
}

