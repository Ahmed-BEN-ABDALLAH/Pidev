<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 * Date: 03/02/2018
 * Time: 17:00
 */

namespace EventsBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsController extends  Controller
{
    public function EventAction()
    {
        return $this->render('EventsBundle::Events.html.twig');
    }



}