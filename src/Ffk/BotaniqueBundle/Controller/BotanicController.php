<?php

namespace Ffk\BotaniqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BotanicController extends Controller
{
    public function indexAction()
    {
        return new Response("Botanics");
    }
}
