<?php

namespace Project\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserAgentController extends Controller
{
    public function indexAction()
    {
        echo "User agent's dude ";

        die; # Die dude die!
    }
}
