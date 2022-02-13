<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('contact/form.html.twig', [
            'form' => $form->createView,
        ]);
    }

    public function contact(Request $request,  MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $dep = $contact->getDepartements();
            $name = $contact->getName();
            $email = $dep->getEmail();

            $email = (new Email())
                ->from('hello@example.com')
                ->to($email)
                ->subject("un message de $name ")
                ->text(" un message de $name ");


            $mailer->send($email);


            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
        }

        return $this->render('contact/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
