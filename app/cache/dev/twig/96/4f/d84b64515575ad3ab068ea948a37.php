<?php

/* ggSiteBundle:Site:homepage.html.twig */
class __TwigTemplate_964fd84b64515575ad3ab068ea948a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ggSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Homepage
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <p class=\"presentation\">
        Bienvenu sur guestgame.com, votre organisateur de parties de jeux de plateau, jeux de
        rôle et autres.
        <br /><br />
        Le but de ce site, est de vous permettre d’organiser une partie de jeu chez vous, ou de
        rejoindre une partie que quelqu’un de votre région organise (un ami par exemple).
        <br /><br />
        Vous êtes ainsi en contact avec d’autres personnes qui partagent votre passion du jeu.
        <br /><br />
        Naturellement guestgame.com détecte automatiquement où vous vous trouvez lors de
        votre passage sur le site, afin de  vous proposer une partie proche de chez vous.
        <br /><br />
        Une fois la partie passé, vous pouvez alors donner un note au joueur qui vous a accueilli,
        ou un petit commentaire pour le remercier. Cela donnera un après goût agréable à la
        soirée, et de la crédibilité à celui ci, pour ses futurs parties.

        Cool ! Comment participer ?
        </p>
";
    }

    // line 27
    public function block_script($context, array $blocks = array())
    {
        echo "    
      ";
        // line 28
        $this->displayParentBlock("script", $context, $blocks);
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ggSiteBundle:Site:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
