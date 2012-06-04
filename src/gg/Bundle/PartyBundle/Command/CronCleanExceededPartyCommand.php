<?php

namespace gg\Bundle\PartyBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CronCleanExceededPartyCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('cron:party:clean')
            ->setDescription('Clean exceeded parties');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {   

    	$em = $this->getContainer()->get('doctrine')->getEntityManager();    	
    	
        $ExceededParties = $em->getRepository('ggPartyBundle:Party')->findAllOrderedByName();
        
        $mailcontent = $this->getContainer()->get('templating')->render('ggPartyBundle:Party:mail_del.html.twig');

        foreach ($ExceededParties as $ExceededParty) {
        	
        	$message = \Swift_Message::newInstance()
            ->setSubject('[Notification] votre partie est passée !')
            ->setContentType('text/html')
            ->setFrom('admin@guestgame.com')
            ->setTo($ExceededParty->getEmail())
            ->setBody($mailcontent);

            $this->getContainer()->get('mailer')->send($message);

        	$em->remove($ExceededParty);
			$em->flush();
        }             
        $output->writeln('Done.');
    }
}