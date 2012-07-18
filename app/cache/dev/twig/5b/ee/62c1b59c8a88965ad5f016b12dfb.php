<?php

/* ggPartyBundle:Party:index.html.twig */
class __TwigTemplate_5bee62c1b59c8a88965ad5f016b12dfb extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var days = array(
        'mon' => 'Lundi',
        'tue' => 'Mardi',
        'wed' => 'Mercredi',
        'thu' => 'Jeudi',
        'fri' => 'Vendredi',
        'sat' => 'Samedi',
        'sun' => 'Dimanche',
        );
</script>
<table id=\"table-search\" class=\"table table-condensed\">
    <a class=\"btn btn-success\" id=\"organise_party\"href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_new"), "html", null, true);
        echo "\">Organiser une partie</a>    
    <thead>
        <tr>
            <th>Jour</th>
            <th>Date</th>
            <th>Où</th>
            <th>Jeu(x)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "        <tr>
            <td class=\"days\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhen"), "D"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhen"), "d/M/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhere"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gwhat"), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-warning btn-mini\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("party_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search icon-white\"></i> Detail</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "ggPartyBundle:Party:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
