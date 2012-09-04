<?php

/* ggPartyBundle:Party:new.html.twig */
class __TwigTemplate_b1e9849f081d2d05a2aa974670ffa030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
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
        echo "    <h4>Nouvelle partie</h4>
    <br />
    <form id=\"form-new-party\" class=\"form-horizontal\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        <fieldset class=\"control-group\">
            <div class=\"control-group\">
                ";
        // line 9
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwho"), "Qui êtes vous", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwho"), array("attr" => array("class" => "input-xlarge", "rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhere"), "Où se déroule la partie", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhere"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhen"), "Date partie", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">    
                ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhen"), array("attr" => array("class" => "datepicker input-date span3", "value" => "")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhat"), "A quel jeu prévoyez vous de jouer", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhat"), array("attr" => array("class" => "input-xlarge", " rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "ghow"), "Infos complémentaire", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ghow"), array("attr" => array("class" => "input-xlarge", " rows" => "3")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"), "Votre email", array("attr" => array("class" => "control-label")));
        echo "
                <div class=\"controls\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                </div>
            </div>
            <div class=\"control-group\">                
                <div class=\"controls\">
                    <button class=\"btn btn-success\" type=\"submit\">Create</button>    
                    <a class=\"btn btn-primary\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Back to the list</a>
                </div>
            </div>            
        </fieldset>
        ";
        // line 51
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        
        
    </form>    
";
    }

    // line 56
    public function block_script($context, array $blocks = array())
    {
        echo "    
";
        // line 57
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script>
    
    \$(function() {
        var addresspicker = \$( \"#addresspicker\" ).addresspicker();
        var addresspickerMap = \$( \"#gg_bundle_partybundle_partytype_gwhere\" ).addresspicker({
        elements: {
        map: \"#new-party-map\",
        lat: \"#gg_bundle_partybundle_partytype_Latitude\",
        lng: \"#gg_bundle_partybundle_partytype_Longitude\",
        locality: '#gg_bundle_partybundle_partytype_Locality',
        country: '#gg_bundle_partybundle_partytype_Country'
        }
        });
        var gmarker = addresspickerMap.addresspicker( \"marker\");
        gmarker.setVisible(true);
        addresspickerMap.addresspicker( \"updatePosition\");
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "ggPartyBundle:Party:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
