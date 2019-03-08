<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ApiAuthType;
use App\Entity\ApiAuth;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/api_auth", name="api_auth")
     */
    public function apiAuth(Request $request)
    {
		$entityManager = $this->getDoctrine()->getManager();
    	$form = $this->createForm(ApiAuthType::class);

       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
        $contactFormData = $form->getData();

        $apiAuth = new ApiAuth();

        $apiAuth->setSoapHash($contactFormData['soapHash']);
        $apiAuth->setSoapToken($contactFormData['soapToken']);

        dump($apiAuth);



        $entityManager->persist($apiAuth);
        $entityManager->flush();

           // do something interesting here
       }
        return $this->render('default/api_auth.html.twig', [
        	 'api_form' => $form,
           'api_form' => $form->createView(),]);
    }
}