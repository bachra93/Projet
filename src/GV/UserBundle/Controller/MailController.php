<?php
namespace GV\UserBundle\Controller;

use GV\UserBundle\Form\MailType;
use GV\UserBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Message;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailController
 *
 * @author Brahim
 */
class MailController extends Controller{
    //put your code here
     public function indexAction() {
        return $this->render('GVUserBundle:Default:test.html.twig', array());
    }

    public function sendMailAction() {
        $to = "swiftmailersymfony@gmail.com";
        $mail = new Mail();
        $form = $this->createForm(new MailType(), $mail);
        $request=$this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
//            $message = Swift_Message::newInstance()->setSubject($mail->getNom())->setFrom("swiftmailersymfony@gmail.com")->setTo($mail->getFrom())->setBody($mail->getText());
//            $this->get('mailer')->send($message);
           
            $this->envoiyerEmailAction($mail->getNom(), $mail->getFrom(),$mail->getText());
            
            return $this->render('GVUserBundle:mail:mail.html.twig', array('to' => $to, 'from' => $mail->getFrom()));
        }
        return $this->redirect($this->generateUrl('gv_user_mail_form'));
    }

    public function newAction() {
        $mail = new Mail();
        $form = $this->createForm(new MailType(), $mail);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->sendMailAction('swiftmailersymfony@gmail.com', $mail->getFrom(), $mail->getNom(), $mail->getText());
        }
        return $this->render('GVUserBundle:mail:new.html.twig', array('form' => $form->createView()));
    }
    public function envoiyerEmailAction($subject,$to,$body)
    {
        $message = Swift_Message::newInstance()->setSubject($subject)->setFrom("swiftmailersymfony@gmail.com")->setTo($to)->setBody($body);
            $this->get('mailer')->send($message);
    }
}

