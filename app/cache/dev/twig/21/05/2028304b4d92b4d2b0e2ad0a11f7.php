<?php

/* ::base.html.twig */
class __TwigTemplate_21052028304b4d92b4d2b0e2ad0a11f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id=\"header-nav-bg\">
            <div id=\"header-nav\">                      
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/logo.png"), "html", null, true);
        echo "\"/>
                <h1 id=\"header-titles\">Guest<span style=\"color:#ff7b00;\">g</span>ame</h1>
                <span id=\"slogan\">On joue aussi près de chez vous !</span></a>
                 <ul>
                    <li><a href=\"\">Info</a></li>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discussion"), "html", null, true);
        echo "\">Discussion</a></li>
                    <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Partie</a></li>
                    <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                </ul>                  
            </div>
        </div>
        <div id=\"main-container\">
            <div id=\"container\">
                ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "            </div>
            <div id=\"sidebar\">
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/hp_lan.jpg"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/hp_bg.jpg"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/hp_rp.jpg"), "html", null, true);
        echo "\">                
                <!--div id=\"sideblock-comment\" class=\"bloc sidebar\">                    
                </div-->
            </div>            
        </div>
        <div id=\"footer-main\">        
            <p id=\"member-count\">
            xxx membres
            </p>
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/images/logo.png"), "html", null, true);
        echo "\"/> 
        </div>
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-ui-1.8.7.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.ui.addresspicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.guestgame.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/js/discussion.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 56
        $this->displayBlock('script', $context, $blocks);
        // line 77
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Guestgame - On joue aussi près de chez vous !";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        echo "        
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/site.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />                   
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />   
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/ui/jquery.timepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/ui/jquery.ui.all.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />           
        ";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 56
    public function block_script($context, array $blocks = array())
    {
        echo "             
            <script type=\"text/javascript\">
                \$('.datepicker').datetimepicker({
                    stepMinute: 10,
                    currentText: 'Maintenant !',
                });
            </script>
            <script>
              \$(document).ready(function() {
              \$('#table-search').dataTable({
                      \"bScrollInfinite\": true,
                      \"bScrollCollapse\": true,
                      \"sScrollY\": \"600px\",
                      \"bInfo\":false
              });
              });
            </script>    
            <script>
            
        </script>                                     
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
