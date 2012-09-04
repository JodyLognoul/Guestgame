<?php

/* ggPartyBundle:Party:edit.html.twig */
class __TwigTemplate_f10d721f32ef61ca357fc079240c63f3 extends Twig_Template
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
        return "ggPartyBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h4>Party edit</h4>
<br />

<form id=\"form-new-party\" class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
     <fieldset class=\"control-group\">
            <div class=\"control-group\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "gwho"), "Qui êtes vous", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "gwho"), array("attr" => array("class" => "input-xlarge", "rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "gwhere"), "Où se déroule la partie", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "gwhere"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "gwhen"), "Date partie", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">    
                ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "gwhen"), array("attr" => array("class" => "datepicker input-date span3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "gwhat"), "A quel jeu prévoyez vous de jouer", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "gwhat"), array("attr" => array("class" => "input-xlarge", " rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "ghow"), "Infos complémentaire", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "ghow"), array("attr" => array("class" => "input-xlarge", " rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "edit_form"), "email"), "Votre email", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "edit_form"), "email"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">                
                <div class=\"controls\">
                    <button class=\"btn btn-success\" type=\"submit\">Update</button>    
                    <a class=\"btn btn-primary\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Back to the list</a>                              
                </div>
            </div>            
        </fieldset>
        ";
        // line 52
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "edit_form"));
        echo "
</form>
<form action=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 55
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
<button class=\"btn btn-danger\" type=\"submit\">Delete</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "ggPartyBundle:Party:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
