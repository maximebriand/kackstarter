<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 07/04/2017
 * Time: 12:07
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Project;

class ProjectsController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
       $em = $this->getDoctrine()->getRepository('AppBundle:Project');

       $projects = $em->findAll();


        return $this->render('projects/index.html.twig', compact('projects'));
    }
}