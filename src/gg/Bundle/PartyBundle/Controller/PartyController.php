<?php

namespace gg\Bundle\PartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use gg\Bundle\PartyBundle\Entity\Party;
use gg\Bundle\PartyBundle\Entity\Mail;
use gg\Bundle\PartyBundle\Form\PartyType;
use gg\Bundle\PartyBundle\Form\MailType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Party controller.
 *
 * @Route("/party")
 */
class PartyController extends Controller
{
    /**
     * Send email for crud action on party.
     *
     * @Route("/crudsendmail", name="crudsendmail")
     * @Template()
     */
    public function crudSendMailAction(){
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setContentType('text/html')
            ->setFrom('admin@guestgame.com')
            ->setTo('lognoulj@gmail.com')
            ->setBody($this->renderView('ggPartyBundle:Party:mail.html.twig', array(
                'title' => '',
                'content' => 'Coucou !')));

            $this->get('mailer')->send($message);
            return new Response('<p>Sended</p>');
    }

    /**
     * send an email to someone.
     *
     * @Route("/{id}/partysendemail", name="partysendemail")
     * @Template()
     */
    public function sendEmailAction($id)
    {
        $entity  = new Mail();
        $request = $this->getRequest();
        $form    = $this->createForm(new MailType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getEntityManager();    
            $party = $em->getRepository('ggPartyBundle:Party')->find($id);

            $message = \Swift_Message::newInstance()
            ->setSubject($form->getData()->getGsubject())
            ->setContentType('text/html')
            ->setFrom('admin@guestgame.com')
            ->setTo($party->getEmail())
            ->setBody($this->renderView('ggPartyBundle:Party:mail.html.twig', array(
                'title' => 'Nouveau message de '.$form->getData()->getGfrom().' :',
                'content' => $form->getData()->getGcontent())));

            $this->get('mailer')->send($message);
            $this->get('session')->setFlash('sucess_send_mail','Message envoyé !');
            //GOOD FORM
            return $this->redirect($this->generateUrl('party_show', array('id' => $id)));
        }
        //BAD FORM
        return $this->redirect($this->generateUrl('party_show', array('id' => $id)));
    }
    /**
     * Lists all Party entities.
     *
     * @Route("/", name="party")
     * @Template()
     */
    public function indexAction()
    {        
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('ggPartyBundle:Party')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Party entity.
     *
     * @Route("/{id}/show", name="party_show")
     * @Template()
     */
    public function showAction($id)
    {

        $entityMail = new Mail();
        $formEmail = $this->createForm(new MailType(), $entityMail);
        
        $em = $this->getDoctrine()->getEntityManager();    
        $entity = $em->getRepository('ggPartyBundle:Party')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Party entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'form_email'  => $formEmail->createView(),
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new Party entity.
     *
     * @Route("/new", name="party_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Party();
        $form   = $this->createForm(new PartyType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Party entity.
     *
     * @Route("/create", name="party_create")
     * @Method("post")
     * @Template("ggPartyBundle:Party:new.html.twig")
     */
    public function createAction()
    {

        $entity  = new Party();
        $request = $this->getRequest();
        $form    = $this->createForm(new PartyType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity->setUrlid(md5(uniqid(rand(),1)));
            $em->persist($entity);
            $em->flush();
            
            //send crud email
            $message = \Swift_Message::newInstance()
            ->setSubject('[Guestgame] Confirmation - partie créée !')
            ->setContentType('text/html')
            ->setFrom('admin@guestgame.com')
            ->setTo($entity->getEmail())
            ->setBody($this->renderView('ggPartyBundle:Party:mail_crud.html.twig', array(
                'party' => $entity)));

            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('party_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Party entity.
     *
     * @Route("/{urlid}/{id}/edit", name="party_edit")
     * @Template()
     */
    public function editAction($id, $urlid)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ggPartyBundle:Party')->find($id);    

        if (!$entity || ($entity->getUrlid() != $urlid)) {
            throw $this->createNotFoundException('Unable to find Party entity.');
        }

        $editForm = $this->createForm(new PartyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Party entity.
     *
     * @Route("/{id}/update", name="party_update")
     * @Method("post")
     * @Template("ggPartyBundle:Party:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ggPartyBundle:Party')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Party entity.');
        }

        $editForm   = $this->createForm(new PartyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('party_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Party entity.
     *
     * @Route("/{id}/delete", name="party_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('ggPartyBundle:Party')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Party entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('party'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
