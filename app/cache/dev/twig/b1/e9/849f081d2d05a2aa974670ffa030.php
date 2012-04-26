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
        echo "    <div class=\"title-page\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/new-party.png"), "html", null, true);
        echo "\"/>
        <h2 class=\"title\">Nouvelle partie</h2>
    </div>                     
    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        <div id=\"new-party-form\"> 
            <div class=\"clearfix\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwho"), "Qui êtes vous");
        echo "
                <div class=\"input\">
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwho"));
        echo "    
                </div>
            </div>
            <div class=\"clearfix\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhere"), "Où se déroule la partie");
        echo "
                <div class=\"input\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhere"), array("attr" => array("class" => "xlarge")));
        echo "    
                </div>
            </div>
            <div class=\"clearfix\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhen"), "Date partie");
        echo "
                <div class=\"input\">    
                ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhen"), array("attr" => array("class" => "datepicker input-date span3")));
        echo "    
                </div>
            </div>
            <div class=\"clearfix\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "gwhat"), "A quel jeu prévoyez vous de jouer");
        echo "
                <div class=\"input\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "gwhat"));
        echo "    
                </div>
            </div>
            <div class=\"clearfix\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "ghow"), "Infos complémentaire");
        echo "
                <div class=\"input\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ghow"));
        echo "    
                </div>
            </div>
            <div class=\"clearfix\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"), "Votre email");
        echo "
                <div class=\"input\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "    
                </div>
            </div>
        ";
        // line 46
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
        </div>
        <div style=\"margin-top: 25px;\">    
            <button class=\"btn gvalid\" type=\"submit\">Create</button>
            <a class=\"btn primary\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Back to the list</a>
        </div>
    </form>    
";
    }

    // line 54
    public function block_script($context, array $blocks = array())
    {
        echo "    
";
        // line 55
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
