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

<table class=\"table\">
    <tbody>
        <tr>
            <th>Qui</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwho"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Où</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhere"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Quand</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhen"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Jeu(x)</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhat"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Infos</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ghow"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td><a href=\"mailto:";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "?subject=Mon sujet de mail&body=Bonjour\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo "</a></td>
        </tr>
    </tbody>
</table>

<a class=\"btn info\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party"), "html", null, true);
        echo "\">Back to the list</a>

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
