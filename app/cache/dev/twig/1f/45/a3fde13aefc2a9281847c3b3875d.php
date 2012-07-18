<?php

/* ggDiscussionBundle:Discussion:show.html.twig */
class __TwigTemplate_1f45a3fde13aefc2a9281847c3b3875d extends Twig_Template
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
        echo "<h4>Discussion</h4>
<br />     

<p style=\"padding:10px;background-color:grey;border-radius:5px;\"><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
        echo "</strong></p>
<div id=\"lescommentaires\">
";
        // line 9
        $context["inc"] = 1;
        echo "    
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 11
            echo "    ";
            if ((0 == $this->getContext($context, "inc") % 2)) {
                // line 12
                echo "        <p style=\"padding:10px;background-color:silver;border-radius:5px;width:385px;margin-left:auto;\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "authorpseudo"), "html", null, true);
                echo "</strong> says :<br />";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "content"), "html", null, true);
                echo "</p>
    ";
            } else {
                // line 14
                echo "        <p style=\"padding:10px;background-color:silver;border-radius:5px;width:385px;\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "authorpseudo"), "html", null, true);
                echo "</strong> says :<br />";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "content"), "html", null, true);
                echo "</p>            
    ";
            }
            // line 16
            echo "    ";
            $context["inc"] = ($this->getContext($context, "inc") + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</div>
<br />
<button id=\"add-comment-btn\" class=\"btn btn-success\" data-toggle=\"modal\" href=\"#newcomment\">Ajouter une commentaire</button>
<a class=\"btn btn-info\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("discussion"), "html", null, true);
        echo "\">Retour aux discussions</a>

<div class=\"modal hide\" id=\"newcomment\">
    <div class=\"modal-header\">
        <button class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Nouveau commentaire<i style=\"vertical-align: middle;\" class=\"icon-pencil\"></i></h3>
    </div>

    <form class=\"form-horizontal\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formcomment"));
        echo ">
    \t
        <div class=\"modal-body\">
            <fieldset>
                <div class=\"control-group\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formcomment"), "authorpseudo"), "Pseudo", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formcomment"), "authorpseudo"), array("attr" => array("class" => "input-xlarge", "rows" => "3")));
        echo "   
                    </div>
                </div>
                <div class=\"control-group\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formcomment"), "authoremail"), "Email", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formcomment"), "authoremail"), array("attr" => array("class" => "input-xlarge", "rows" => "3")));
        echo "   
                    </div>
                </div>
                <div class=\"control-group\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formcomment"), "content"), "Commentaire", array("attr" => array("class" => "control-label")));
        echo "
                    <div class=\"controls\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formcomment"), "content"), array("attr" => array("class" => "input-xlarge", "rows" => "3")));
        echo "   
                    </div>
                </div>
                <input type=\"hidden\" name=\"iddiscution\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "\">                
            </fieldset>
            ";
        // line 53
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formcomment"));
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
        return "ggDiscussionBundle:Discussion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
