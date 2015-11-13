<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ProductController extends Controller
{
    /**
     * @Route("/list")
     * @Template()
     */
    public function listAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/addToCart/{id}")
     * @Template()
     */
    public function addToCartAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/basket")
     * @Template()
     */
    public function basketAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/removeFromCart/{id}")
     * @Template()
     */
    public function removeFromCartAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/clearBasket")
     * @Template()
     */
    public function clearBasketAction()
    {
        return array(
                // ...
            );    }

}
