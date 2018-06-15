<?php
/**
 * Created by IntelliJ IDEA.
 * User: veaceslav.falceanu
 * Date: 6/15/18
 * Time: 10:25 AM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Hello");
    }
}