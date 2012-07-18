<?php

namespace gg\Bundle\DiscussionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use gg\Bundle\DiscussionBundle\Entity\Discussion;
use gg\Bundle\DiscussionBundle\Form\DiscussionType;
use gg\Bundle\DiscussionBundle\Entity\Comment;
use gg\Bundle\DiscussionBundle\Form\CommentType;

/**
 * Discussion controller.
 *
 * @Route("/discussion")
 */
class DiscussionController extends Controller
{
    /**
     * Lists all Discussion entities.
     *
     * @Route("/", name="discussion")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('ggDiscussionBundle:Discussion')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Discussion entity.
     *
     * @Route("/{id}/show", name="discussion_show")
     * @Template()
     */
    public function showAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();

        //comment form
        $entitycomment = new Comment();
        $formcomment   = $this->createForm(new CommentType(), $entitycomment);

        //comment list
        $comments = $em->getRepository('ggDiscussionBundle:Comment')->findBy(array('discussion' => $id));

        //discution show        
        $discution = $em->getRepository('ggDiscussionBundle:Discussion')->find($id);

        if (!$discution) {
            throw $this->createNotFoundException('Unable to find Discussion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $discution,
            'delete_form' => $deleteForm->createView(),
            'formcomment' => $formcomment->createView(),
            'comments'    => $comments);
    }

    /**
     * Displays a form to create a new Discussion entity.
     *
     * @Route("/new", name="discussion_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Discussion();
        $form   = $this->createForm(new DiscussionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Discussion entity.
     *
     * @Route("/create", name="discussion_create")
     * @Method("post")
     * @Template("ggDiscussionBundle:Discussion:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Discussion();
        $request = $this->getRequest();
        $form    = $this->createForm(new DiscussionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('discussion_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Discussion entity.
     *
     * @Route("/{id}/edit", name="discussion_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ggDiscussionBundle:Discussion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Discussion entity.');
        }

        $editForm = $this->createForm(new DiscussionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Discussion entity.
     *
     * @Route("/{id}/update", name="discussion_update")
     * @Method("post")
     * @Template("ggDiscussionBundle:Discussion:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('ggDiscussionBundle:Discussion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Discussion entity.');
        }

        $editForm   = $this->createForm(new DiscussionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('discussion_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Discussion entity.
     *
     * @Route("/{id}/delete", name="discussion_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('ggDiscussionBundle:Discussion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Discussion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('discussion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
