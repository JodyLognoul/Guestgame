<?php

/* ggDiscussionBundle:Discussion:new.html.twig */
class __TwigTemplate_95bb632f80cff260de988681df7cd99d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ggDiscussionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Nouvelle discussion</h4>
<br />
<form class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discussion_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    <fieldset class=\"control-group\">
    \t<div class=\"control-group\">
                ";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "title"), "Titre de l'article", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "title"), array("attr" => array("class" => "input-xlarge")));
        echo "    
            \t</div>
        </div>
        <div class=\"control-group\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "authorpseudo"), "Pseudo", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "authorpseudo"), array("attr" => array("class" => "input-xlarge")));
        echo "    
            \t</div>
        </div>
        <div class=\"control-group\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "authoremail"), "Adresse email", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "authoremail"), array("attr" => array("class" => "input-xlarge")));
        echo "    
            \t</div>
        </div>
       ";
        // line 26
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    </fieldset>
    <p>
        <a class=\"btn btn-info\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discussion"), "html", null, true);
        echo "\">Retour aux discussion</a>
        <button class=\"btn btn-success\" type=\"submit\">Create</button>
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "ggDiscussionBundle:Discussion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
