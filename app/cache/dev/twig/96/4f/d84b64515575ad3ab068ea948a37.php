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
        echo "        <p>
        Bienvenu sur Guestgame, votre organisateur de parties de jeux de plateau, jeux de
        rôle et lan's.
        <br /><br />
        Guestgame vous offre deux options: <strong>organiser</strong> ou <strong>rejoindre</strong> une partie de jeu.
        <br /><br />
        Pour <strong>organisez</strong>, vous devez simplement renseigner quelques informations: la <em>date</em>, l'<em>heure</em> et le <em>lieu</em> de la partie, ainsi que votre <em>adresse email</em> afin que les personnes interessées puissent vous contacter. 
        <br /><br />
        Pour <strong>rejoindre une partie</strong>, c'est encore plus simple. Rendez vous dans le détail de la partie à laquelle vous voulez participer, et envoyez un message à l'organisateur.  
        <br /><br />
        Pour <strong>modifier</strong> ou <strong>annuler</strong> une partie, vous pouvez utiliser les liens reçus par email lors de la création de la partie.
        <br /><br />
        Bon jeu à tous !
        </p>
        <br />
        <a class=\"btn btn btn-success\"href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Trouver une partie</a>
";
    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        echo "    
      ";
        // line 26
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
