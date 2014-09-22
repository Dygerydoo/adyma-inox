<?php

namespace Adyma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Adyma\MainBundle\Form\Type\ContactType;

class DefaultController extends Controller
{
    /**
     * @Route("/contacto", _name="contacto")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                ->setSubject($form->get('subject')->getData())
                ->setFrom($form->get('email')->getData())
                ->setTo('caserofrancisco@gmail.com')
                ->setBody(
                    $this->renderView(
                        'AdymaMainBundle:Default:one.html.twig',
                        array(
                            'ip' => $request->getClientIp(),
                            'name' => $form->get('name')->getData(),
                            'message' => $form->get('message')->getData()
                            )
                        )
                    );

                $this->get('mailer')->send($message);

                $request->getSession()->getFlashBag()->add('success', 'Tu email ha sido enviado. Gracias!');

                return $this->redirect($this->generateUrl('contacto'));
            }
        }

        return array(
            'contact_form' => $form->createView()
        );
    }
}
