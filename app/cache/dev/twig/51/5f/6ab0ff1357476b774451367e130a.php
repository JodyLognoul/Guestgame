<?php

/* ggPartyBundle:Party:show.html.twig */
class __TwigTemplate_515f6ab0ff1357476b774451367e130a extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h4>Détail d'une partie</h4>
<br />
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("sucess_send_mail", ), "method")) {
            // line 8
            echo "    <div class=\"alert alert-info fade in\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        Message envoyé !
    </div>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array("create_sucess_send_mail", ), "method")) {
            // line 14
            echo "    <div class=\"alert alert-info fade in\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        Un email de confirmation vient d'être envoyé à ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
            echo ". Pour modifier ou supprimer la partie, veuillez utiliser le lien indiqué dans cet email.
    </div>
";
        }
        // line 19
        echo "<table class=\"table\">
    <tbody>
        <tr>
            <th>Qui</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwho"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Où</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhere"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Quand</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhen"), "d/M/Y"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Jeu(x)</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhat"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Infos</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ghow"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Email</th>           
            <td><a class=\"btn\" data-toggle=\"modal\" href=\"#writeDialog\"><i style=\"vertical-align: middle;\" class=\"icon-envelope\"></i> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</a></td>
        </tr>

         <tr>
            <th></th>           
            <td><a class=\"btn btn-info\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Back to the list</a></td>
        </tr>

    </tbody>
</table>
<div class=\"modal hide\" id=\"writeDialog\">
    <div class=\"modal-header\">
        <button class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Nouveau message <i style=\"vertical-align: middle;\" class=\"icon-pencil\"></i></h3>
    </div>

    <form class=\"form-horizontal\" action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partysendemail", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form_email"));
        echo ">
        <div class=\"modal-body\">
            <fieldset>
                <div class=\"control-group\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form_email"), "gfrom"), "Votre email", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form_email"), "gfrom"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                    </div>
                </div>
                <div class=\"control-group\">
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form_email"), "gsubject"), "Sujet", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form_email"), "gsubject"), array("attr" => array("class" => "input-xlarge")));
        echo "    
                    </div>
                </div>
                <div class=\"control-group\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form_email"), "gcontent"), "Sujet", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form_email"), "gcontent"), array("attr" => array("class" => "input-xlarge", "rows" => "5")));
        echo "    
                    </div>
                </div>
            </fieldset>
            ";
        // line 82
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form_email"));
        echo "
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" data-dismiss=\"modal\" class=\"btn\">Retour</a>
            <button type=\"submit\" class=\"btn btn-success\">Envoyer</a>
        </div>
    </form> 
</div>
        
";
    }

    public function getTemplateName()
    {
        return "ggPartyBundle:Party:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
