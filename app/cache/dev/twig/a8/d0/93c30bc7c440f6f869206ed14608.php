<?php

/* ggSiteBundle:Site:new.html.twig */
class __TwigTemplate_a8d093c30bc7c440f6f869206ed14608 extends Twig_Template
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
        return "ggSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"container\" class=\"bloc\">
    <h1>Site creation</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site"), "html", null, true);
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "ggSiteBundle:Site:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
